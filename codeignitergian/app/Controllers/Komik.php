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
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran terlalu besar (Max 1MB)',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mine_in' => 'yang anda pilih bukan gambar'

                ]
            ]


        ])) {
            return redirect()->to('komik/create')->withInput();
        }

        //UPLOAD GAMBAR
        //Ambil Gambar
        $fileSampul = $this->request->getFile('sampul');

        //Apakah tifak ada gambar yang di upload
        if ($fileSampul->getError() == 4) {
            $namasampul = 'default.jpg';
        } else {


            //Ambil Nama File
            $namasampul = $fileSampul->getName();
            // //Upload File dengan nama random
            $namasampul = $fileSampul->getRandomName();
            //Pindaknan gambar ke folder IMG
            // $fileSampul->move('img');
            $fileSampul->move('img', $namasampul);
        }





        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namasampul
        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil di Tambahkan.');

        return redirect()->to(base_url() . '/komik');
    }

    public function delete($id)
    {
        //Cari Gambar Berdasar ID
        $komik = $this->komikModel->find($id);
        //Hapus Gambar
        if ($komik['sampul'] == 'default.jpg') {
            unlink('img/' . $komik['sampul']);
            $this->komikModel->delete($id);
            session()->setFlashdata('Pesan', 'Data Berhasil di Hapus.');
            return redirect()->to(base_url() . '/komik');
        } else {
            unlink('img/' . $komik['sampul']);
            $this->komikModel->delete($id);
            session()->setFlashdata('Pesan', 'Data Berhasil di Hapus.');
            return redirect()->to(base_url() . '/komik');
        }
    }

    public function edit($slug)
    {

        $data = [
            'title' => 'Ubah Data Komik',
            'validation' => \Config\Services::validation(),
            'komik' => $this->komikModel->getKomik($slug)
        ];
        // dd($data['komik']);
        return view('komik/edit', $data);
    }

    public function update($id)
    {
        //Validasi Input
        //cek judul
        $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
        if ($komikLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[komik.judul]';
        }

        // dd($komikLama);
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
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
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran terlalu besar (Max 1MB)',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mine_in' => 'yang anda pilih bukan gambar'

                ]
            ]


        ])) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            // return redirect()->to('komik/create')->withInput()->with('validation', $validation);
            return redirect()->to('komik/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileSampul = $this->request->getFile('sampul');

        if ($fileSampul->getError() == 4) {
            $namaFile = $this->request->getVar('sampullama');
        } else {
            $namaFile = $fileSampul->getRandomName();

            $fileSampul->move('img', $namaFile);

            unlink('img/' . $this->request->getVar('sampullama'));
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $namaFile
        ]);

        session()->setFlashdata('Pesan', 'Data Berhasil di Ubah.');

        return redirect()->to(base_url() . '/komik');
    }
}
