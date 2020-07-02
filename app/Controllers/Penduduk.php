<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PendudukModel;
use App\Libraries\Pdfgenerator;

class Penduduk extends BaseController
{
    protected $model;
    private $pdf;

    public function __construct()
    {
        $this->model = new PendudukModel();
        $this->pdf = new Pdfgenerator;
    }
    public function index()
    {
        if (session()->get('email') == '') {
            session()->setFlashdata('gagal', 'anda belum login');
            return redirect()->to(base_url('loginadmin'));
        }
        $data = [
            'title' => 'List Data Penduduk',
            'penduduk' => $this->model->get_penduduk(),
            'content' => 'penduduk/index'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Penduduk',
            'content' => 'penduduk/create'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function save()
    {
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'temp_tgl_lahir' => $this->request->getPost('temp_tgl_lahir'),
            'jen_kel' => $this->request->getPost('jen_kel'),
            'alamat' => $this->request->getPost('alamat'),
            'agama' => $this->request->getPost('agama'),
            'status' => $this->request->getPost('status'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),

        ];
        $this->model->insert_penduduk($data);
        session()->setFlashdata('success', 'Data Penduduk berhasil ditambahkan');
        return redirect()->to(base_url('penduduk'));
    }
    public function edit($nik)
    {
        $data = [
            'title' => 'Edit Data Penduduk',
            'penduduk' => $this->model->edit_penduduk($nik),
            'content' => 'penduduk/edit'
        ];
        echo view('layouts/wrapper', $data);
    }

    public function update($nik)
    {
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'temp_tgl_lahir' => $this->request->getPost('temp_tgl_lahir'),
            'jen_kel' => $this->request->getPost('jen_kel'),
            'alamat' => $this->request->getPost('alamat'),
            'agama' => $this->request->getPost('agama'),
            'status' => $this->request->getPost('status'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
        ];
        $this->model->update_penduduk($data, $nik);
        session()->setFlashdata('success', 'Data Penduduk berhasil diupdate');
        return redirect()->to(base_url('penduduk'));
    }
    public function delete($nik)
    {
        $this->model->delete_penduduk($nik);
        session()->setFlashdata('success', 'Data Penduduk berhasil dihapus');
        return redirect()->to(base_url('penduduk'));
    }
    public function pdf()
    {
        $data['penduduk'] = $this->model->get_penduduk();
        $view = view('penduduk/pdf', $data);
        $this->pdf->generate($view, 'Laporan Pendudk', true, 'a4', 'landscape');
    }
    public function excel()
    {
        $data['penduduk'] = $this->model->get_penduduk();
        header("Content-type= application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename= Data Penduduk.xls");
        return view('penduduk/excel', $data);
    }
}
