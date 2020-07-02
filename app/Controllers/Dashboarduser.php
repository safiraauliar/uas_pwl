<?php

namespace App\Controllers;

class Dashboarduser extends BaseController
{
    public function index()
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'anda belum login');
            return redirect()->to(base_url('loginadmin/user'));
        }
        $data = [
            'title' => 'Halaman Dashboard User',
            'content' => 'dashboard'

        ];
        echo view('layouts/wrapper_user', $data);
    }
}
