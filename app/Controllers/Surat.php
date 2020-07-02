<?php

namespace App\Controllers;

use CodeIgniter\Controller;
// use App\Models\SuratModel;
use App\Libraries\Pdfgenerator;

class Surat extends BaseController
{
    protected $model;
    private $pdf;

    public function __construct()
    {
        // $this->model = new SuratModel();
        $this->pdf = new Pdfgenerator;
    }
    public function index()
    {
        $data = [
            'title' => 'List Data Surat',
            // 'surat' => $this->model->get_surat(),
            'content' => 'kelola_surat/surat'
        ];
        echo view('layouts/wrapper_user', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Surat',
            'content' => 'surat/create'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function save()
    {
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'jen_surat' => $this->request->getPost('jen_surat'),
            'pesan' => $this->request->getPost('pesan'),

        ];
        $this->model->insert_surat($data);
        session()->setFlashdata('success', 'Data Surat berhasil ditambahkan');
        return redirect()->to(base_url('surat'));
    }
    public function edit($nik)
    {
        $data = [
            'title' => 'Edit Data Surat',
            'surat' => $this->model->edit_surat($nik),
            'content' => 'surat/edit'
        ];
        echo view('layouts/wrapper', $data);
    }

    public function update($nik)
    {
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'jen_surat' => $this->request->getPost('jen_surat'),
            'pesan' => $this->request->getPost('pesan'),

        ];
        $this->model->insert_surat($data);
        session()->setFlashdata('success', 'Data Surat berhasil ditambahkan');
        return redirect()->to(base_url('surat'));
    }
    public function delete($nik)
    {
        $this->model->delete_surat($nik);
        session()->setFlashdata('success', 'Data Surat berhasil dihapus');
        return redirect()->to(base_url('surat'));
    }
    public function pdf()
    {
        $data['surat'] = $this->model->get_surat();
        $view = view('surat/pdf', $data);
        $this->pdf->generate($view, 'Pengajuan Surat', true, 'a4', 'potrait');
    }
    public function excel()
    {
        $data['surat'] = $this->model->get_surat();
        header("Content-type= application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename= surat.xls");
        return view('surat/excel', $data);
    }
}
