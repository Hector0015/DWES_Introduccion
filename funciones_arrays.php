<?php 
    $nombres=array(
        "Nombre0" => "Carmen",
        "Nombre1" => "David",
        "Nombre2" => "Hector",
        "Nombre3" => "Pablo",
        "Nombre4" => "Raul",
        "Nombre5" => "Irene");
        print_r($nombres);
        echo "<br>";
        echo ('Contiene ' . count($nombres) . ' elementos en total');
        echo "<br>";
        echo implode(" ", $nombres);
        asort($nombres);
        echo "<br>";
        print_r($nombres);
        echo "<br>";
        $reverse = array_reverse($nombres,true);
        print_r($reverse);
        echo "<br>";
        echo ('Se encuentra en la posicion ' . array_search("Hector",$nombres));
        echo "<br>";
        $alumnos=[
            [
                "id" => "0",
                "nombre" => "Carmen",
                "edad" => "19"
            ],[
                "id" => "1",
                "nombre" => "Pablo",
                "edad" => "17"
            ],[
                "id" => "2",
                "nombre" => "Hector",
                "edad" => "19"
            ],[
                "id" => "3",
                "nombre" => "David",
                "edad" => "19"
            ],[
                "id" => "4",
                "nombre" => "Raul",
                "edad" => "18"
            ],[
                "id" => "5",
                "nombre" => "Irene",
                "edad" => "18"
            ]
        ];
?>
<html>
    <body>
        <h1>Alumnos</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
            </tr>

            <?php

                $concat = "";

                foreach ($alumnos as $estudiantes) {
                    $concat .= '<tr>';
                    $concat .= '<td>' . $estudiantes['id'] .'</td>';
                    $concat .= '<td>' . $estudiantes['nombre'] .'</td>';
                    $concat .= '<td>' . $estudiantes['edad'] .'</td>';
                    $concat .= '</tr>';
                }
                echo $concat;
            ?>

        </table>
    </body>
</html>

<?php 
    echo "<br>";
    $indexado = array_column($alumnos, 'nombre');
    print_r($indexado);
    echo "<br>";
    $numeros=array(2,3,5,10,2,7,40,1,30,25);
    echo array_sum($numeros);
    echo "<br>";
    $color =[
        [
        'id' => 'blanco'], 
        [
         'id'   =>'verde'],
        [ 
        'id'=>'rojo']
    ];
?>
<html>
    <body>
        <h1>Colores</h1>
        <table border="1">

            <?php

                $concat = "";

                foreach ($color as $colores) {
                    $concat .= '<ul>';
                    $concat .= '<li>' . $colores['id'] .'</li>';
                    $concat .= '</ul>';
                }
                echo $concat;
            ?>

        </table>
    </body>
</html>