<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'List Data User',
            'user' => $this->model->get_user(),
            'content' => 'user/index'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data User',
            'content' => 'user/create'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function save()
    {
        $data = [
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'image' => $this->request->getPost('image'),
            'password' => $this->request->getPost('password'),
            'role_id' => $this->request->getPost('role_id'),

        ];
        $this->model->insert_user($data);
        session()->setFlashdata('success', 'Data user berhasil ditambahkan');
        return redirect()->to(base_url('user'));
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data user',
            'user' => $this->model->edit_user($id),
            'content' => 'user/edit'
        ];
        echo view('layouts/wrapper', $data);
    }

    public function update($id)
    {
        $data = [
            'id' => $this->request->getPost('id'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'image' => $this->request->getPost('image'),
            'password' => $this->request->getPost('password'),
            'role_id' => $this->request->getPost('role_id'),

        ];
        $this->model->update_penduduk($data, $id);
        session()->setFlashdata('success', 'Data User berhasil diupdate');
        return redirect()->to(base_url('user'));
    }
    public function delete($nik)
    {
        $this->model->delete_penduduk($nik);
        session()->setFlashdata('success', 'Data user berhasil dihapus');
        return redirect()->to(base_url('user'));
    }
}
