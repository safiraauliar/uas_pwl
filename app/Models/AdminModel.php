<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;


class AdminModel extends Model
{
    // protected $table = 'users';
    // protected $primarykey = 'id';
    // protected $allowedFields = ['fullname', 'email', 'password', 'photo', 'level'];

    public function get_admin()
    {
        return $this->db->table('users')->get()->getResultArray();
    }
    public function insert_admin($data)
    {
        return $this->db->table('users')->insert($data);
    }
    public function edit_admin($id)
    {
        return $this->db->table('users')->where('id', $id)->get()->getRowArray();
    }
    public function update_admin($data, $id)
    {
        return $this->db->table('users')->update($data, array('id' => $id));
    }
    public function delete_admin($id)
    {
        return $this->db->table('users')->delete(array('id' => $id));
    }
}
