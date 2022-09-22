<?php

use App\Controllers\
{   AuthController,
    HomeController,
    PostsController,
    RegisterController,
    LogoutController
};

require './vendor/autoload.php';


$router->map('GET','/',function(){ 
    $controller = new HomeController(); 
    $controller->index();
},'home');

$router->map('GET','/articles',function(){
    $controller = new PostsController();
    $controller->index();
}
,'posts');

// $router->map('GET | POST','/login',function(){
//     $controller = new AuthController();
//     $controller->index();
// },'auth');

$router->map('GET | POST','/login',function(){
    $controller = new AuthController();
    $controller->index(); 
    $controller->login();
},'auth');

$router->map('GET | POST ','/inscription',function(){
    $controller = new RegisterController();
    $controller->register();
},'inscription');


$router->map('GET | POST','/logout',function(){
    $controller = new LogoutController();
    $controller->logout();
},'logout');



