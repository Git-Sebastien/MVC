<?php 

namespace App\Controllers;

use Core\Controller\Controller;

class RegisterController extends Controller{

    CONST LIMIT_USERNAME_LENGHT = 5;
    CONST LIMIT_PASSWORD_LENGHT = 8;


    private $username;
    private $mail;
    private $password;


    public function __construct()
    {
        $this->render('register');
    }

    public function register()
    {
        if(!empty($this->username) && !empty($_POST['mail']) && !empty($_POST['pwd'])){
            $this->loadModel('registerManager');
        }

    }
}