<?php 
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';


$router = new AltoRouter();

require __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'routes.php';
$match = $router->match();


if(is_array($match)){
    session_start();
    require ROOT . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'layout'. DIRECTORY_SEPARATOR . 'header.php';

    if(is_callable($match['target'])){
        call_user_func_array($match['target'],$match['params']);
    }
    else{
        $params = $match['params'];
        require 'app/Controllers/'.$match['target'].'.php';
    }
    require ROOT . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'layout'. DIRECTORY_SEPARATOR . 'footer.php';
}
else{
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}