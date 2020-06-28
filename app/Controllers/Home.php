<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Halaman Dashboard',
			'content' => 'dashboard'

		];
		echo view('layouts/wrapper',$data);
	}

	//--------------------------------------------------------------------

}
