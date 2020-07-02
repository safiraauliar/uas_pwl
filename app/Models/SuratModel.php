<?php

namespace App\Models;

use CodeIgniter\Model;


class SuratModel extends Model
{

    public function get_surat()
    {
        return $this->db->table('surat')->get()->getResultArray();
    }
    public function insert_surat($data)
    {
        return $this->db->table('surat')->insert($data);
    }
    public function edit_surat($nik)
    {
        return $this->db->table('surat')->where('nik', $nik)->get()->getRowArray();
    }
    public function update_surat($data, $nik)
    {
        return $this->db->table('surat')->update($data, array('nik' => $nik));
    }
    public function delete_surat($nik)
    {
        return $this->db->table('surat')->delete(array('nik' => $nik));
    }
}
