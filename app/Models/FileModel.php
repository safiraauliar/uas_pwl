<?php

namespace App\Models;

use CodeIgniter\Model;


class FileModel extends Model
{

    public function get_files()
    {
        return $this->db->table('files_upload')->get()->getResultArray();
    }
    public function insert_files($data)
    {
        return $this->db->table('files_upload')->insert($data);
    }
    public function edit_files($id)
    {
        return $this->db->table('files_upload')->where('id', $id)->get()->getRowArray();
    }
    public function update_files($data, $id)
    {
        return $this->db->table('files_upload')->update($data, array('id' => $id));
    }
    public function delete_files($id)
    {
        return $this->db->table('files_upload')->delete(array('id' => $id));
    }
}
