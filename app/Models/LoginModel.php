<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;


class LoginModel extends Model
{
    public function cek_login($email, $password)
    {
        return $this->db->table('users')->where(array('email' => $email, 'password' => $password))->get()->getRowArray();
    }
    public function get_user()
    {
        return $this->db->table('users')->get()->getResultArray();
    }
    public function insert_user($data)
    {
        return $this->db->table('users')->insert($data);
    }
    public function edit_user($id)
    {
        return $this->db->table('users')->where('id', $id)->get()->getRowArray();
    }
    public function update_user($data, $id)
    {
        return $this->db->table('users')->update($data, array('id' => $id));
    }
    public function delete_user($id)
    {
        return $this->db->table('users')->delete(array('id' => $id));
    }
}
