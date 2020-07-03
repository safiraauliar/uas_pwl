<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends BaseController
{
    protected $model;
    public function __construct()
    {
        helper('form');
        $this->model = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login user',
            'content' => 'auth/registrasi'
        ];
        echo view('templates/wrapper_auth', $data);
    }
    public function registrasi()
    {
        // $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $this->model->insert($_POST);
        session()->setFlashdata('success', 'Akun anda berhasil dibuat, silahkan Login');
        return redirect()->to(base_url('loginadmin/user'));
    }
}
