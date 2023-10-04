<?php
require('CSession.php');
$username = $_GET['username'] ?? '';
$email = $_GET['email'] ?? '';
$password = $_GET['password'] ?? '';

$resultado = $pdo->query("SELECT username, email, password FROM users");

while ($registro = $resultado->fetch())

{

    echo "Users ".$registro['username'].": ";
    echo $registro['email'].": ";
    echo $registro['password']."<br />";

}
?>