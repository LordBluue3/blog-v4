<?php

namespace App\Libraries;

use Parsedown;

class ProjectsParser
{
    protected $parsedown;
    protected $projectsPath;

    public function __construct()
    {
        $this->parsedown = new Parsedown();
        $this->projectsPath = WRITEPATH . 'projects/';
    }

    /**
     * Get all projects
     */
    public function getAllProjects(): array
    {
        $projects = [];

        if (!is_dir($this->projectsPath)) {
            return $projects;
        }

        $files = glob($this->projectsPath . '*.md');

        foreach ($files as $file) {
            $project = $this->parseProject($file);
            if ($project) {
                $projects[] = $project;
            }
        }

        usort($projects, function ($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        return $projects;
    }

    /**
     * Get a single project by slug
     */
    public function getProject(string $slug): ?array
    {
        $projects = $this->getAllProjects();

        foreach ($projects as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }

        return null;
    }

    /**
     * Parse a markdown file
     */
    protected function parseProject(string $filePath): ?array
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

        $techStack = [];
        if (isset($metadata['stack'])) {
            $techStack = array_map('trim', explode(',', $metadata['stack']));
        }

        return [
            'title' => $metadata['title'] ?? 'Sem título',
            'date' => $metadata['date'] ?? date('Y-m-d'),
            'image' => $metadata['image'] ?? 'https://placehold.co/600x400/11998e/ffffff?text=Project',
            'description' => $metadata['description'] ?? '',
            'github' => $metadata['github'] ?? '',
            'stack' => $techStack,
            'demo' => $metadata['demo'] ?? '',
            'type' => $metadata['type'] ?? 'personal',
            'company' => $metadata['company'] ?? '',
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
        return $filename;
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
        $month = $months[(int)date('m', $timestamp)];
        $year = date('Y', $timestamp);

        return "{$day} de {$month} de {$year}";
    }

    /**
     * Get tech stack icon
     */
    public function getTechIcon(string $tech): string
    {
        $icons = [
            'php' => '🐘',
            'laravel' => '🔴',
            'livewire' => '⚡',
            'react' => '⚛️',
            'typescript' => '🔷',
            'javascript' => '🟨',
            'vue' => '💚',
            'nodejs' => '🟢',
            'python' => '🐍',
            'docker' => '🐳',
            'mysql' => '🐬',
            'postgresql' => '🐘',
            'mongodb' => '🍃',
            'redis' => '🔴',
            'tailwind' => '🎨',
            'bootstrap' => '🅱️',
            'codeigniter' => '🔥',
        ];

        $techLower = strtolower(trim($tech));
        return $icons[$techLower] ?? '📦';
    }
}
