<?php 

namespace Core\Model;

use \PDO;
use PDOStatement;

class Model{

    private $host = "localhost";
    private $db_name = "blog";
    private $username = 'root';
    private $password = 'root';

    protected $db_connection;


    protected $table;
    protected $id;
    
    public function db_connect() : PDO
    {
        if($this->db_connection == null){
            $this->db_connection = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name.'',$this->username,$this->password,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }
        return $this->db_connection;
    }

    public function getAll():PDOStatement
    {
        $sql = "SELECT * FROM " . $this->table;
        return $this->db_connection->query($sql)->fetchAll();
    }

    public function registerUsers(string $username, string $email, string $password) :bool
    {
        $sql = "INSERT INTO " . $this->table . "(username,email,password) VALUES (:username,:email,:password)" ;
        $statement = $this->db_connection->prepare($sql);
        return $statement->execute([
            "username" => $username,
            "email" => $email,
            "password" => $password
        ]);
    }

}