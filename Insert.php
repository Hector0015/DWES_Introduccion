<?php 
require('Conexion.php');

$marca = $_GET['marca'] ?? '';
$color = $_GET['color'] ?? '';
$peso = $_GET['peso'] ?? '';


$sql = "INSERT INTO Producto (marca, color, peso) VALUES (?, ?, ?)";
$sta = $pdo->prepare($sql);
$sta->bindParam(1, $marca);
$sta->bindParam(2, $color);
$sta->bindParam(3, $peso);


$sta->execute();
?>