<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AuthModel;


class Auth extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new AuthModel();
    }

    public function index()
    {
        $validation = $this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|trim'
            ],
        ]);
        if (!$validation) {
            $data = [
                'title' => 'Halaman Login',
                'content' => 'auth/login'
            ];
            echo view('templates/wrapper_auth', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->model->where('user', ['email' => $email])->getRowArray();
        var_dump($user);
        die;
    }
    public function registrasi()
    {
        $validation = $this->validate([
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required'
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|trim|valid_email|is_unique[user,email]',
                'errors' => [
                    'valid_email' => 'Email tidak valid',
                    'is_unique' => 'Email telah digunakan'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|trim|min_length[3]|matches[password1]'
            ],
            'password1' => [
                'label' => 'Password',
                'rules' => 'required|trim|matches[password]'
            ]
        ]);

        if (!$validation) {
            $data = [
                'title' => 'Halaman Registrasi',
                'content' => 'auth/registrasi'
            ];
            echo view('templates/wrapper_auth', $data);
        } else {
            $data = [
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
            ];
            $this->model->insert($data);
            session()->setFlashdata('success', 'Akun anda berhasil dibuat, silahkan Login');
            return redirect()->to(base_url('auth'));
        }
    }
}
