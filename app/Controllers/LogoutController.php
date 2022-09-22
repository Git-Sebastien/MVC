<?php 

namespace App\Controllers;

use Core\Controller\Controller;

class LogoutController extends Controller{


    public function logout()
    {
        session_destroy();
        $this->render('logout');
    }

}