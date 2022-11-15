<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Gian Sonia | Web Developer'
        ];
        echo view('layout/header', $data);
        echo view('home/index');
        echo view('layout/footer');
    }
}
