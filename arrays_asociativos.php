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
    echo $juegos['individual'][0];
?>