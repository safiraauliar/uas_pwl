<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $model;
    public function __construct()
    {
        helper('form');
        $this->model = new AdminModel();
    }
    public function index()
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'anda belum login');
            return redirect()->to(base_url('loginadmin'));
        }
        $data = [
            'title' => 'Tabel Data Admin',
            'users' => $this->model->get_admin(),
            'validation' => $this->validator,
            'content' => 'admin/index'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Admin',
            'content' => 'admin/create'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function save()
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('admin/create'));
        }
        $validated = $this->validate([
            'photo' => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg, image/gif, image/png|max_size[photo, 5000]'
        ]);
        if ($validated == FALSE) {
            return redirect()->to(base_url('admin/create'));
        } else {
            $file_gambar = $this->request->getFile('photo');
            $file_gambar->move(ROOTPATH . 'public/admin_photo');
            $data = [
                'fullname' => $this->request->getPost('fullname'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                // 'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'photo' => $file_gambar->getName(),
                'level' => $this->request->getPost('level'),

            ];
        }
        $this->model->insert_admin($data);
        session()->setFlashdata('success', 'Data Admin berhasil ditambahkan');
        return redirect()->to(base_url('admin'));
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Admin',
            'users' => $this->model->edit_admin($id),
            'content' => 'admin/edit'
        ];
        echo view('layouts/wrapper', $data);
    }

    public function update($id)
    {
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to(base_url('admin/create'));
        }
        $validated = $this->validate([
            'photo' => 'uploaded[photo]|mime_in[photo,image/jpg,image/jpeg, image/gif, image/png|max_size[photo, 5000]'
        ]);
        if ($validated == FALSE) {
            return redirect()->to(base_url('admin/create'));
        } else {
            $file_gambar = $this->request->getFile('photo');
            $file_gambar->move(ROOTPATH . 'public/admin_photo');
            $data = [
                'fullname' => $this->request->getPost('fullname'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'photo' => $file_gambar->getName(),
                'level' => $this->request->getPost('level'),

            ];
        }
        $this->model->insert_admin($data, $id);
        session()->setFlashdata('success', 'Data Admin berhasil ditambahkan');
        return redirect()->to(base_url('admin'));
    }
    public function delete($id)
    {
        $this->model->delete_admin($id);
        session()->setFlashdata('success', 'Data Admin berhasil dihapus');
        return redirect()->to(base_url('admin'));
    }
}
