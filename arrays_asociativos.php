<?php 
    $alumno = array(
        'nombre' => 'Sara',
        'apellido' => 'García',
        'edad' => 22
    );

    //otra opcion de asociativos

    $alumnos = [
        'nombre' => 'Sara',
        'apellido' => 'García',
        'edad' => 22
    ];
    $alumnos['nombre'] = 'Verónica';
    echo $alumnos['nombre'];

    //Arrays multidimensionales

    $juegos = [
        'multijugador' => ['Overwatch2', 'LoL'],
        'individual' => ['Fire emblem', 'Solitario']
    ];

    //multidimensional Asociativo
    $caja = [
        [
            'nombre' => 'Pablo',
            'edad' => 25
        ],
        [
            'nombre' => 'Juan',
            'edad' => 29
        ],
    ];
    echo $caja[1]['nombre'];
    echo $juegos['individual'][0];
    echo "<br>";
    foreach($alumnos as $cajas){
        echo $cajas . "<br>";
    }
    //Recorrer asociativos
    $meteors = array(

        'Hoba' => 60000000,

        'Cape York' => 58200000,

        'Campo del Cielo' => 50000000,

        'Canyon Diablo' => 30000000

    );

    print_r($meteors);

    echo "<hr>";

    foreach($meteors as $meteor){

        echo $meteor . "<br>";

    }
    foreach($meteors as $nombre => $peso){

        echo "$nombre pesa $peso gramos <br>";

    }
    //Faltan plantillas pero pone uso más adelante
    print_r($caja);
?>