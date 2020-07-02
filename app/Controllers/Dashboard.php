<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		if (session()->get('email') == '') {
			session()->setFlashdata('gagal', 'anda belum login');
			return redirect()->to(base_url('loginadmin'));
		}
		$data = [
			'title' => 'Halaman Dashboard',
			'content' => 'dashboard'

		];
		echo view('layouts/wrapper', $data);
	}
}
