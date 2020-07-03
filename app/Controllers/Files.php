<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FileModel;

class Files extends BaseController
{
    protected $model;
    public function __construct()
    {
        helper('form');
        $this->model = new FileModel();
    }
    public function index()
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'anda belum login');
            return redirect()->to(base_url('loginadmin'));
        }
        $data = [
            'title' => 'Data File Surat',
            'files' => $this->model->get_files(),
            'validation' => $this->validator,
            'content' => 'kelola_surat/file_surat'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Files ',
            'content' => 'kelola_surat/create'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function save()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('files/tambah'));
        }
        $validated = $this->validate([
            'file_data' => 'uploaded[file_data]|max_size[file_data, 5000]'
        ]);
        if ($validated == FALSE) {
            return redirect()->to(base_url('files/tambah'));
        } else {
            $file_data = $this->request->getFile('file_data');
            $file_data->move(ROOTPATH . 'public/File_upload');
            $data = [
                'file_judul' => $this->request->getPost('file_judul'),
                'file_deskripsi' => $this->request->getPost('file_deskripsi'),
                'file_tgl' => $this->request->getPost('file_tgl'),
                'file_oleh' => $this->request->getPost('file_oleh'),
                'file_data' => $file_data->getName(),
            ];
        }
        $this->model->insert_files($data);
        session()->setFlashdata('success', 'Data Berita berhasil ditambahkan');
        return redirect()->to(base_url('files'));
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data',
            'files' => $this->model->edit_files($id),
            'content' => 'kelola_surat/edit'
        ];
        echo view('layouts/wrapper', $data);
    }

    public function update($id)
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('files/tambah'));
        }
        $validated = $this->validate([
            'file_data' => 'uploaded[file_data]|max_size[gambar, 5000]'
        ]);
        if ($validated == FALSE) {
            return redirect()->to(base_url('files/tambah'));
        } else {
            $file_gambar = $this->request->getFile('file_data');
            $file_gambar->move(ROOTPATH . 'public/File_upload');
            $data = [
                'file_judul' => $this->request->getPost('file_judul'),
                'file_deskripsi' => $this->request->getPost('file_deskripsi'),
                'file_tgl' => $this->request->getPost('file_tgl'),
                'file_oleh' => $this->request->getPost('file_tgl'),
                'file_data' => $file_gambar->getName(),
            ];
        }
        $this->model->insert_files($data, $id);
        session()->setFlashdata('success', 'Data Berita berhasil ditambahkan');
        return redirect()->to(base_url('files'));
    }
    public function delete($id)
    {
        $this->model->delete_files($id);
        session()->setFlashdata('success', 'Data Berita berhasil dihapus');
        return redirect()->to(base_url('files'));
    }
}
