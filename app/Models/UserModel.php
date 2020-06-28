<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{

    public function get_user()
    {
        return $this->db->table('user')->get()->getResultArray();
    }
    public function insert_user($data)
    {
        return $this->db->table('user')->insert($data);
    }
    public function edit_user($id)
    {
        return $this->db->table('user')->where('id', $id)->get()->getRowArray();
    }
    public function update_user($data, $id)
    {
        return $this->db->table('user')->update($data, array('id' => $id));
    }
    public function delete_user($id)
    {
        return $this->db->table('user')->delete(array('id' => $id));
    }
}
