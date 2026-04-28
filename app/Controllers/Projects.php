<?php

namespace App\Controllers;

use App\Libraries\ProjectsParser;

class Projects extends BaseController
{
    protected $projectsParser;

    public function __construct()
    {
        $this->projectsParser = new ProjectsParser();
    }

    public function index(): string
    {
        $data['projects'] = $this->projectsParser->getAllProjects();
        $data['parser'] = $this->projectsParser;

        return view('projects/index', $data);
    }

    public function view(string $slug): string
    {
        $project = $this->projectsParser->getProject($slug);

        if (!$project) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['project'] = $project;
        $data['parser'] = $this->projectsParser;

        return view('projects/view', $data);
    }
}
