<?php 

namespace App\Controllers;

use Core\Controller\Controller;

class HomeController extends Controller {

    public function index()
    {
        $this->render('home');
    }

    public function login() 
    {
        if(isset($_POST['username'])){
            $_SESSION['user'] = $_POST['username'];
        }
    }
}