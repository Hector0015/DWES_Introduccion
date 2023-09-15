<?php
$nombres = array('Manolo', 'Juan', 'Pepe');
$nombres = ['Lucas', 'Joan', 'Pedro'];
print_r($nombres);
echo "\n";
//Se sobreescriben en teoría :(
$nombres[] = 'Raul';
print_r($nombres);
echo "\n";
echo $nombres[2+1];
echo "\n";
$nombres[0] = 'Sara';
print_r($nombres);
echo "\n";
?>