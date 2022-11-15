<?php

namespace App\Controllers;

use \App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        $komik = $this->komikModel->findAll();
        // dd($komik);
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];
        //Cara Manual
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     dd($row);
        // }




        return view('komik/index', $data);
    }
}
