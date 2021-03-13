<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table      = 'komik';

    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    protected $useTimestamps = true;

    public function getData($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return $this->where(['slug' => $slug])->first();
    }
}