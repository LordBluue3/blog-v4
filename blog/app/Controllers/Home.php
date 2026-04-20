<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $photos = [
            'https://avatars.githubusercontent.com/u/58037508?v=4',
        ];

        $data['profilePhoto'] = $photos[array_rand($photos)];

        return view('home', $data);
    }
}
