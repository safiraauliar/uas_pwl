<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $model;
    public function __construct()
    {
        helper('form');
        $this->model = new BeritaModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Tabel Data Artikel',
            'berita' => $this->model->get_berita(),
            'validation' => $this->validator,
            'content' => 'berita/index'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Artikel',
            'content' => 'berita/create'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function save()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('berita/create'));
        }
        $validated = $this->validate([
            'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg, image/gif, image/png|max_size[gambar, 5000]'
        ]);
        if ($validated == FALSE) {
            return redirect()->to(base_url('berita/create'));
        } else {
            $file_gambar = $this->request->getFile('gambar');
            $file_gambar->move(ROOTPATH . 'public/Berita_img');
            $data = [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'tanggal_upload' => $this->request->getPost('tanggal_upload'),
                'gambar' => $file_gambar->getName(),
            ];
        }
        $this->model->insert_berita($data);
        session()->setFlashdata('success', 'Data Berita berhasil ditambahkan');
        return redirect()->to(base_url('berita'));
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Artikel',
            'berita' => $this->model->edit_berita($id),
            'content' => 'berita/edit'
        ];
        echo view('layouts/wrapper', $data);
    }

    public function update($id)
    {
        if ($this->request->getMethod !== 'post') {
            return redirect()->to(base_url('berita'));
        }
        $validated = $this->validate([
            'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg, image/gif, image/png|max_size[gambar, 5000]'
        ]);
        if ($validated == FALSE) {
            return $this->index();
        } else {
            $file_gambar = $this->request->getFile('gambar');
            $file_gambar->move(ROOTPATH . 'public/Berita_img');
            $data = [
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'tanggal_upload' => $this->request->getPost('tanggal_upload'),
                'gambar' => $file_gambar->getName(),
            ];
        }
        $this->model->insert_berita($data);
        session()->setFlashdata('success', 'Data Berita berhasil ditambahkan');
        return redirect()->to(base_url('berita'));
    }
    public function delete($id)
    {
        $this->model->delete_berita($id);
        session()->setFlashdata('success', 'Data Berita berhasil dihapus');
        return redirect()->to(base_url('berita'));
    }
    public function sejarah()
    {
        $data = [
            'title' => 'Sejarah Desa Konohagakure',
            'berita' => $this->model->get_berita(),
            'content' => 'beranda/sejarah'

        ];
        echo view('frontend_layouts/wrapper', $data);
    }
    public function visimisi()
    {
        $data = [
            'title' => 'Visi Misi Desa Konohagakure',
            // 'berita' => $this->model->get_berita(),
            'content' => 'beranda/visimisi'

        ];
        echo view('frontend_layouts/wrapper', $data);
    }
    public function profil_wilayah()
    {
        $data = [
            'title' => 'Profil Wilayah Desa Konohagakure',
            'content' => 'beranda/profil_wilayah_desa'

        ];
        echo view('frontend_layouts/wrapper', $data);
    }
    public function lambang_desa()
    {
        $data = [
            'title' => 'Arti Lambang Desa Konohagakure',
            'content' => 'beranda/arti_lambang_desa'

        ];
        echo view('frontend_layouts/wrapper', $data);
    }
    public function pemerintah_desa()
    {
        $data = [
            'title' => 'Pemerintah Desa Konohagakure',
            'content' => 'beranda/pemerintah_desa'

        ];
        echo view('frontend_layouts/wrapper', $data);
    }
    public function selamat_datang()
    {
        $data = [
            'title' => 'Selamat Datang di Desa Konohagakure',
            'content' => 'beranda/welcome'

        ];
        echo view('frontend_layouts/wrapper', $data);
    }
}
