<?php 

namespace App\Models;

use Core\Model\Model;

class RegisterManager extends Model{

    public function __construct()
    {
        $this->table = 'users';
        $this->db_connect();
        $this->registerUsers($_POST['username'] ,$_POST['mail'],$_POST['pwd']);
    }

}