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
            'title' => 'Halaman Login',
            'content' => 'auth/login'
        ];
        echo view('templates/wrapper_auth', $data);
    }


    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $admin = $this->model->cek_login($email, $password);
        if (($admin['email'] == $email) && ($admin['password'] == $password)) {
            session()->set('email', $admin['email']);
            session()->set('fullname', $admin['fullname']);
            session()->set('photo', $admin['photo']);
            session()->set('level', $admin['level']);
            if (session()->get('level') == 1) {
                return redirect()->to(base_url('dashboard'));
            } else {
                session()->setFlashdata('gagal', 'login hanya untuk user yang telah terdaftar');
                return redirect()->to(base_url('loginadmin'));
            }
        } else {
            ///user atau password salah
            session()->setFlashdata('gagal', 'email atau pasword salah');
            return redirect()->to(base_url('loginadmin'));
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('loginadmin'));
    }
    public function user()
    {

        $data = [
            'title' => 'Halaman Login',
            'content' => 'auth/login_user'
        ];
        echo view('templates/wrapper_auth', $data);
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
            session()->set('level', $admin['level']);
            if (session()->get('level') == 0) {
                return redirect()->to(base_url('dashboarduser'));
            } else {
                session()->setFlashdata('gagal', 'login hanya untuk user yang telah terdaftar');
                return redirect()->to(base_url('loginadmin/user'));
            }
        } else {
            ///user atau password salah
            session()->setFlashdata('gagal', 'email atau pasword salah');
            return redirect()->to(base_url('loginadmin/user'));
        }
    }
    public function logout_user()
    {
        session()->destroy();
        return redirect()->to(base_url('loginadmin/user'));
    }
}
