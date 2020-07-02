<?php

namespace App\Models;

use CodeIgniter\Model;


class LaporanModel extends Model
{

    public function get_laporan()
    {
        return $this->db->table('laporan')->get()->getResultArray();
    }
    public function insert_laporan($data)
    {
        return $this->db->table('laporan')->insert($data);
    }
    public function edit_laporan($id)
    {
        return $this->db->table('laporan')->where('id', $id)->get()->getRowArray();
    }
    public function update_laporan($data, $id)
    {
        return $this->db->table('laporan')->update($data, array('id' => $id));
    }
    public function delete_laporan($id)
    {
        return $this->db->table('laporan')->delete(array('id' => $id));
    }
}
