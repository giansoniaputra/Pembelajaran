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
        // $komik = $this->komikModel->findAll();
        // dd($komik);
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $this->komikModel->getKomik()
        ];
        //Cara Manual
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     dd($row);
        // }




        return view('komik/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];
        // dd($data['komik']);
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan!');
        }
        return view('komik/detail', $data);
    }

    public function create()
    {

        $data = [
            'title' => 'Detail Komik',
            'validation' => \Config\Services::validation()
        ];
        // dd($data['komik']);
        return view('komik/create', $data);
    }

    public function save()
    {
        //Validasi Input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} Komik harus Diisi!',
                    'is_unique' => '{field} Komik sudah Terdaftar!'
                ]

            ],
            'penulis' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Komik harus Diisi!'
                ]
            ],
            'penerbit' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Komik harus Diisi!'
                ]
            ],
            'sampul' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Komik harus Diisi!'
                ]
            ]


        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('komik/create')->withInput()->with('validation', $validation);
        }
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil di Tambahkan.');

        return redirect()->to('/komik');
    }
}
