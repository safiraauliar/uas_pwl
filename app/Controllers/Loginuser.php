<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoginModel;


class Loginadmin extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new LoginModel();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'Login user',
            'content' => 'auth/login_user'
        ];
        echo view('templates/wrapper_auth', $data);
    }
    public function registrasi()
    {
        $validation = $this->validate([
            'fullname' => [
                'label' => 'fullname',
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
                'fullname' => $this->request->getVar('fullname'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'photo' => $this->request->getVar('photo')
            ];
            $this->model->insert($data);
            session()->setFlashdata('success', 'Akun anda berhasil dibuat, silahkan Login');
            return redirect()->to(base_url('auth'));
        }
    }
    public function login_user()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $admin = $this->model->cek_login($email, $password);
        if (($admin['email'] == $email) && ($admin['password'] == $password)) {
            session()->set('email', $admin['email']);
            session()->set('fullname', $admin['fullname']);
            session()->set('photo', $admin['photo']);
            return redirect()->to(base_url('dashboard'));
        } else {
            ///user atau password salah
            session()->setFlashdata('gagal', 'email atau pasword salah');
            return redirect()->to(base_url('loginuser'));
        }
    }
    public function logout_user()
    {
        session()->destroy();
        return redirect()->to(base_url('loginuser'));
    }
}
