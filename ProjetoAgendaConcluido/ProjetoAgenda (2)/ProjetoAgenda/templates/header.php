<?php
    
    include_once("config/url.php");
    include_once("config/process.php");

    //limpa a mensagem
     //  Isso verifica se a variável de sessão chamada 'msg' está definida. 
     //isset é uma função que retorna verdadeiro se a variável estiver definida e não for nula.
     
     if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
     }
    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" 
    integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
    <!-- FONT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">  
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                <img src="img/logo.svg" alt="Agenda">
             
        </a>
        <div> 
            <!--Criamos nossa navbar, quando clicar em Agenda em Adicionar contato, ele vai para BASE_URL que 
            muda a url como definimos na nossa pasta config em url.php, e esta funcionando nesta pasta porque incluimos ela
            usando include_once("config/url.php"); la em cima"
        -->
            <div class="navbar-nav">
                <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php" >Agenda </a>
                <a class="nav-link active" href="<?= $BASE_URL ?>create.php" >Adicionar Conato </a>

            </div>
        </div>
        </nav>

    </header>