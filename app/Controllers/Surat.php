<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SuratModel;
use App\Libraries\Pdfgenerator;

class Surat extends BaseController
{
    protected $model;
    private $pdf;

    public function __construct()
    {
        $this->model = new SuratModel();
        $this->pdf = new Pdfgenerator;
    }
    public function index()
    {
        $data = [
            'title' => 'List Data Surat',
            'content' => 'kelola_surat/surat'
        ];
        echo view('layouts/wrapper_user', $data);
    }
    public function template_surat()
    {
        $data = [
            'title' => 'List Data Surat',
            'content' => 'kelola_surat/template_surat'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function surat_masuk()
    {
        $data = [
            'title' => ' Data Permintaan Surat Masuk',
            'surat' => $this->model->get_surat(),
            'content' => 'kelola_surat/surat_masuk'
        ];
        echo view('layouts/wrapper', $data);
    }
    public function display_permohonan()
    {
        $data = [
            'title' => ' Permohonan Yang dikirim',
            'surat' => $this->model->get_surat(),
            'content' => 'kelola_surat/display_permohonan'
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
            'no_hp' => $this->request->getPost('no_hp'),
            'jenis_surat' => $this->request->getPost('jenis_surat'),
            'pesan' => $this->request->getPost('pesan'),

        ];
        $this->model->insert_surat($data);
        session()->setFlashdata('success', 'Data Surat berhasil ditambahkan');
        return redirect()->to(base_url('surat/display_permohonan'));
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Permohonan Surat',
            'surat' => $this->model->edit_surat($id),
            'content' => 'kelola_surat/edit_permohonan'
        ];
        echo view('layouts/wrapper_user', $data);
    }

    public function update($id)
    {
        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'jenis_surat' => $this->request->getPost('jenis_surat'),
            'pesan' => $this->request->getPost('pesan'),
        ];
        $this->model->update_surat($data, $id);
        session()->setFlashdata('success', 'Data Penduduk berhasil diupdate');
        return redirect()->to(base_url('surat/display_permohonan'));
    }

    public function delete($id)
    {
        $this->model->delete_surat($id);
        session()->setFlashdata('success', 'Data Surat berhasil dihapus');
        return redirect()->to(base_url('surat/surat_masuk'));
    }
    public function delete_user($id)
    {
        $this->model->delete_surat($id);
        session()->setFlashdata('success', 'Data Surat berhasil dihapus');
        return redirect()->to(base_url('surat/display_permohonan'));
    }
    public function pdf()
    {
        $data['surat'] = $this->model->get_surat();
        $view = view('surat/pdf', $data);
        $this->pdf->generate($view, 'Pengajuan Surat', true, 'a4', 'potrait');
    }
}
