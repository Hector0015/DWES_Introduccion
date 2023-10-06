<?php
session_start();

if (!isset($_SESSION['username'])) {

    $_SESSION['msg'] = "Para acceder a esta página, debes iniciar sesión primero";

    header('location: SLogin.php?returnToUrl=SPrivada.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privada</title>
</head>

<body>
    Buenos dias <?= $_SESSION["username"]; ?>
    <a href='SLogout.php'>Cerrar sesión</a>

</body>

</html>