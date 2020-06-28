<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;


class AuthModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['id', 'nama', 'email', 'image', 'password', 'role_id'];
}
