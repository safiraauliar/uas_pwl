<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaporanModel;

class Laporan extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new LaporanModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Lapor Warga',
            'laporan' => $this->model->get_laporan(),
            'content' => 'laporan/index'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function user()
    {
        $data = [
            'title' => 'Lapor Warga',
            'content' => 'laporan/create'
        ];
        echo view('layouts/wrapper_user', $data);
    }
    public function display_laporan()
    {
        $data = [
            'title' => 'Lapor Warga',
            'laporan' => $this->model->get_laporan(),
            'content' => 'laporan/indexuser'
        ];
        echo view('layouts/wrapper_user', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Laporan',
            'content' => 'laporan/create'
        ];
        echo view('layouts/wrapper_user', $data);
    }
    public function save()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'isi_laporan' => $this->request->getPost('isi_laporan'),
            'tgl_lapor' => $this->request->getPost('tgl_lapor'),
        ];
        $this->model->insert_laporan($data);
        session()->setFlashdata('success', 'Data Laporan berhasil ditambahkan');
        return redirect()->to(base_url('laporan/display_laporan'));
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Laporan',
            'laporan' => $this->model->edit_laporan($id),
            'content' => 'laporan/edit'
        ];
        echo view('layouts/wrapper_user', $data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'isi_laporan' => $this->request->getPost('isi_laporan'),
            'tgl_lapor' => $this->request->getPost('tgl_lapor'),
        ];
        $this->model->update_laporan($data, $id);
        session()->setFlashdata('success', 'Data Laporan berhasil diupdate');
        return redirect()->to(base_url('laporan/display_laporan'));
    }
    public function delete($id)
    {
        $this->model->delete_laporan($id);
        session()->setFlashdata('success', 'Data Laporan berhasil dihapus');
        return redirect()->to(base_url('laporan'));
    }
    public function delete_for_user($id)
    {
        $this->model->delete_laporan($id);
        session()->setFlashdata('success', 'Data Laporan berhasil dihapus');
        return redirect()->to(base_url('laporan/display_laporan'));
    }
    public function pdf()
    {
        $data['laporan'] = $this->model->get_laporan();
        $view = view('laporan/pdf', $data);
        $this->pdf->generate($view, 'Laporan Penduduk', true, 'a4', 'potrait');
    }
}
