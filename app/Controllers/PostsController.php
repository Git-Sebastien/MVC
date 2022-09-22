<?php 

namespace App\Controllers;

use Core\Controller\Controller;

class PostsController extends Controller{

    public function index()
    {
        $data = $this->loadModel('usersManager')->getAll();
        $this->render('posts',$data);
        
        
    }
}