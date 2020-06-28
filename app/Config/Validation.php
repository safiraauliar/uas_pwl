<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	//validasi register
	// public $registrasi = [
	// 	'nama' => 'required',
	// 	'email' => 'required|valid_email|is_unique',
	// 	'password1' => 'required|matches[password2]',
	// 	'password2' => 'required'
	// ];
	// public $registrasi_error = [
	// 	'nama' => [
	// 		'required' => 'Nama tidak boleh Kosong',
	// 	],
	// 	'email' => [
	// 		'required' => 'Email tidak boleh kosong',
	// 		'valid_email' => 'Email tidak valid',
	// 		'is_unique' => 'Email Telah digunakan'
	// 	],
	// 	'password1' => [
	// 		'required' => 'Password tidak boleh kosong'
	// 	],
	// 	'password2' => [
	// 		'required' => 'Password tidak cocok'
	// 	]

	// ];
}
