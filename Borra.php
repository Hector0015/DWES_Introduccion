<?php 
require('Conexion.php');

$id = $_GET['id'] ?? '';
$marca = $_GET['marca'] ?? '';
$color = $_GET['color'] ?? '';
$peso = $_GET['peso'] ?? '';

$registros = $pdo->exec('DELETE FROM Producto WHERE id = ' . $id);
?>