<?php 
require('Conexion.php');

$marca = $_GET['marca'] ?? '';
$color = $_GET['color'] ?? '';
$peso = $_GET['peso'] ?? '';

$resultado = $pdo->query("SELECT marca, color, peso FROM Producto");

while ($registro = $resultado->fetch())

{

    echo "Producto ".$registro['marca'].": ";
    echo $registro['color'].": ";
    echo $registro['peso']."<br />";

}
?>