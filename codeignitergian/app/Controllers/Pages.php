<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Gian Sonia | Web Developer'
        ];

        return view('home/index', $data);
    }
}
