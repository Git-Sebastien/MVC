<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/fonts/fonts.css">
        <link rel="stylesheet" href="./public/css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    </head>
    <body>
            <header class="main-header">
                <nav class="navbar navbar-expand-lg ">
                        <ul class="main-nav">
                            <li> <a href="/">Accueil</a></li>  
                            <span class="text-muted">|</span>                         
                            <li> <a href="/login">Connection</a></li>  
                            <span class="text-muted">|</span>                         
                            <li> <a href="/inscription">Inscription</a></li>
                        </ul>          
                </nav> 
                <h1 class="text-center main-title">The Newspapers</h1>  
                <span class="loged">Bienvenue <b> <?= isset($_SESSION['user']) ? $_SESSION['user'] .'</b> • <span class="logout"><a href="/logout">Se deconnecter</a></span>' :   "Invité" ?></b></span> 
            </header>