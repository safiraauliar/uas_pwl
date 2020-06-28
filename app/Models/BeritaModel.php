<?php

namespace App\Models;

use CodeIgniter\Model;


class BeritaModel extends Model
{

    public function get_berita()
    {
        return $this->db->table('berita')->get()->getResultArray();
    }
    public function insert_berita($data)
    {
        return $this->db->table('berita')->insert($data);
    }
    public function edit_berita($id)
    {
        return $this->db->table('berita')->where('id', $id)->get()->getRowArray();
    }
    public function update_berita($data, $id)
    {
        return $this->db->table('berita')->update($data, array('id' => $id));
    }
    public function delete_berita($id)
    {
        return $this->db->table('berita')->delete(array('id' => $id));
    }
}
