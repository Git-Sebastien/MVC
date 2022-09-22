<?php 

namespace App\Models;

use Core\Model\Model;

class usersManager extends Model {

    public function __construct()
    {
        $this->table = 'users';
        $this->db_connect();
    }
}