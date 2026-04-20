<?php

namespace App\Libraries;

use Parsedown;

class MarkdownParser
{
    protected $parsedown;
    protected $postsPath;

    public function __construct()
    {
        $this->parsedown = new Parsedown();
        $this->postsPath = WRITEPATH . 'posts/';
    }

    /**
     * Get all posts
     */
    public function getAllPosts(): array
    {
        $posts = [];

        if (!is_dir($this->postsPath)) {
            return $posts;
        }

        $files = glob($this->postsPath . '*.md');

        foreach ($files as $file) {
            $post = $this->parsePost($file);
            if ($post) {
                $posts[] = $post;
            }
        }

        usort($posts, function ($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return $posts;
    }

    /**
     * Get a single post by slug
     */
    public function getPost(string $slug): ?array
    {
        $posts = $this->getAllPosts();

        foreach ($posts as $post) {
            if ($post['slug'] === $slug) {
                return $post;
            }
        }

        return null;
    }

    /**
     * Parse a markdown file
     */
    protected function parsePost(string $filePath): ?array
    {
        if (!file_exists($filePath)) {
            return null;
        }

        $content = file_get_contents($filePath);

        $parts = $this->extractFrontMatter($content);

        if (!$parts) {
            return null;
        }

        $metadata = $parts['metadata'];
        $markdown = $parts['content'];

        $html = $this->parsedown->text($markdown);

        $filename = basename($filePath, '.md');
        $slug = $this->generateSlug($filename);

        return [
            'title' => $metadata['title'] ?? 'Sem título',
            'date' => $metadata['date'] ?? date('Y-m-d'),
            'author' => $metadata['author'] ?? 'Autor Desconhecido',
            'image' => $metadata['image'] ?? 'https://placehold.co/400x200/667eea/ffffff?text=Post',
            'excerpt' => $metadata['excerpt'] ?? '',
            'content' => $html,
            'slug' => $slug,
        ];
    }

    /**
     * Extract YAML front matter from markdown
     */
    protected function extractFrontMatter(string $content): ?array
    {
        if (!preg_match('/^---\s*\n(.*?)\n---\s*\n(.*)$/s', $content, $matches)) {
            return null;
        }

        $frontMatter = $matches[1];
        $markdown = $matches[2];

        $metadata = [];
        $lines = explode("\n", $frontMatter);

        foreach ($lines as $line) {
            if (strpos($line, ':') !== false) {
                list($key, $value) = explode(':', $line, 2);
                $metadata[trim($key)] = trim($value);
            }
        }

        return [
            'metadata' => $metadata,
            'content' => $markdown
        ];
    }

    /**
     * Generate slug from filename
     */
    protected function generateSlug(string $filename): string
    {
        $slug = preg_replace('/^\d{4}-\d{2}-\d{2}-/', '', $filename);

        return $slug;
    }

    /**
     * Format date for display
     */
    public function formatDate(string $date): string
    {
        $months = [
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro'
        ];

        $timestamp = strtotime($date);
        $day = date('d', $timestamp);
        $month = (int)date('m', $timestamp);
        $year = date('Y', $timestamp);

        return "$day de {$months[$month]}, $year";
    }
}
