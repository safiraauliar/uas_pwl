<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Desa Konohagakure',
            'content' => 'beranda/index'

        ];
        echo view('frontend_layouts/wrapper', $data);
    }

    public function surat()
    {
        $data = [
            'title' => 'Sejarah Desa Konohagakure',
            'content' => 'kelola_surat/surat'

        ];
        echo view('kelola_surat/surat', $data);
    }
}
