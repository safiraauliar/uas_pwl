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
    public function edit_surat($id)
    {
        return $this->db->table('surat')->where('id', $id)->get()->getRowArray();
    }
    public function update_surat($data, $id)
    {
        return $this->db->table('surat')->update($data, array('id' => $id));
    }
    public function delete_surat($id)
    {
        return $this->db->table('surat')->delete(array('id' => $id));
    }
}
