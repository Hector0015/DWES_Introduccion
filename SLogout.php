<?php 
require('CSession.php');
    session_start();
    session_unset();
    session_destroy();
    if (isset($_GET["returnToUrl"])){
        header('location: ' . $_GET["returnToUrl"]);
    }else {
        header('location: SLogin.php');
    }
?>