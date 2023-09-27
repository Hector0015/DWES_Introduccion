<?php

use function PHPSTORM_META\type;

    $imagen = $_GET['imagen'] ?? '';
    $letMeIn = $_GET['letMeIn'] ?? '';

    // header('Content-Type: image/png');
    // imagepng(imagecreatefrompng('/home/alumno/Imágenes/x.png'));
    

    if($letMeIn != 1){
        http_response_code('401');
        header('Content-Type: image/png');
        imagepng(imagecreatefrompng('/home/alumno/Imágenes/x.png'));
    }elseif(is_file('/home/alumno/Imágenes/' . $imagen)) {
        header('Content-Type: image/png');
        imagepng(imagecreatefrompng('/home/alumno/Imágenes/' . $imagen));
    }else{
        http_response_code('404');
        header('Content-Type: image/png');
        imagepng(imagecreatefrompng('/home/alumno/Imágenes/x.png'));
    }

?>