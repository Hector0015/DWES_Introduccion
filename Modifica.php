<?php 
require('Conexion.php');
$id = $_GET['id'] ?? '';
$marca = $_GET['marca'] ?? '';
$color = $_GET['color'] ?? '';
$peso = $_GET['peso'] ?? '';

$sql = $pdo->exec("UPDATE Producto SET marca='$marca', color='$color', peso='$peso' WHERE id=$id");


?>