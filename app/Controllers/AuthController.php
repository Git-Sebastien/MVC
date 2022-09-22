<?php 

namespace App\Controllers;

use Core\Controller\Controller;


class AuthController extends Controller{


    public function index ()
    {
        $this->render('auth');
    }

    public function login() 
    {
        if(isset($_POST['username'])){
            $_SESSION['user'] = $_POST['username'];
            header('Location:/');
        }
    }

}