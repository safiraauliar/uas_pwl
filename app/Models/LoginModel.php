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
}
