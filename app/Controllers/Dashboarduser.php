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
        if (session()->get('level') == 0) {

            // return redirect()->to(base_url('dashboarduser'));
            $data = [
                'title' => 'Profil User',
                'content' => 'dashboard_user'

            ];
            echo view('layouts/wrapper_user', $data);
        } else {
            session()->setFlashdata('gagal', 'login hanya untuk user yang telah terdaftar');
            return redirect()->to(base_url('loginadmin/user'));
        }
    }
}
