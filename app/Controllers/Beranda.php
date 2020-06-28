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
}
