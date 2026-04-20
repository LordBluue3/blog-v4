<?php

namespace App\Controllers;

use App\Libraries\MarkdownParser;

class Blog extends BaseController
{
    protected $markdownParser;

    public function __construct()
    {
        $this->markdownParser = new MarkdownParser();
    }

    public function index(): string
    {
        $data['posts'] = $this->markdownParser->getAllPosts();
        $data['parser'] = $this->markdownParser;

        return view('blog/index', $data);
    }

    public function view(string $slug): string
    {
        $post = $this->markdownParser->getPost($slug);

        if (!$post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['post'] = $post;
        $data['parser'] = $this->markdownParser;

        return view('blog/view', $data);
    }
}
