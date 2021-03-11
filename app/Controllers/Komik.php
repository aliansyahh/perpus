<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $KomikModel;

    public function __construct()
    {
        $this->KomikModel = new KomikModel();
    }
    public function index()
    {
        $data = ['komik' => $this->KomikModel->getDataKomik()];

        return view('komik/index', $data);
    }
    public function detail($slug)
    {
        $data = ['komik' => $this->KomikModel->getDataKomik($slug)];
        return view('komik/detail', $data);
    }

    public function create()
    {
        return view('komik/create');
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->KomikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('/komik'));
    }
}