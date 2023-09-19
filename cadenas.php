<?php 
    $nombre = $_GET['nombre'] ?? 'Hector';
    $segundo = $_GET['segundo'] ?? '';
    $nombre = trim($nombre, '/');
    echo $nombre;
    echo "<br>";
    echo(strlen($nombre));
    echo "<br>";
    echo(strtoupper($nombre));
    echo "<br>";
    echo(strtolower($nombre));
    echo "<br>";
    $ubicacion = strpos($nombre, $segundo);
    if($segundo == ""){
        echo ('No hay prefijo');
    echo "<br>";

    }else if($ubicacion === false){
        echo('No esta en la palabra');
    echo "<br>";

    }else if($ubicacion != 0){
        echo('No se encuentra en el prefijo');
    echo "<br>";
    }else {
        echo ('Tienen el mismo prefijo');
        echo "<br>";
    }
    echo(substr_count(strtoupper($nombre),'A'));
    echo "<br>";
    $posicion = stripos(strtoupper($nombre), 'A');
    if($posicion == false){
        echo('No se ha encontrado en el nombre');
    echo "<br>";

    }else{
        echo('Se encuentra en la posicion: ' . $posicion);
    echo "<br>";

    }
    echo(str_ireplace('o','0',$nombre));
    $url = 'http://username:password@hostname:9090/path?arg=value';
    echo "<br>";    
    echo parse_url($url,PHP_URL_SCHEME);
    echo "<br>";
    echo parse_url($url,PHP_URL_USER);
    echo "<br>";
    echo parse_url($url,PHP_URL_PATH);
    echo "<br>";
    echo parse_url($url,PHP_URL_QUERY);
    ?>