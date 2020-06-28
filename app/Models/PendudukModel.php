<?php

namespace App\Models;

use CodeIgniter\Model;


class PendudukModel extends Model
{

    public function get_penduduk()
    {
        return $this->db->table('penduduk')->get()->getResultArray();
    }
    public function insert_penduduk($data)
    {
        return $this->db->table('penduduk')->insert($data);
    }
    public function edit_penduduk($kode)
    {
        return $this->db->table('penduduk')->where('nik', $kode)->get()->getRowArray();
    }
    public function update_penduduk($data, $nik)
    {
        return $this->db->table('penduduk')->update($data, array('nik' => $nik));
    }
    public function delete_penduduk($nik)
    {
        return $this->db->table('penduduk')->delete(array('nik' => $nik));
    }
}
