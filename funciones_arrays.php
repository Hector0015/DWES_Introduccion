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

<?php 
    $colors=array(
        'blanco' => 'blanco.html',
        'verde' => 'verde.hmtl',
        'rojo' => 'rojo.html');
?>
<html>
    <body>
        <h1>Colores</h1>
        <table border="1">

            <?php

                $concat = "";

                foreach($colors as $colores => $enlace){
                    $concat .= '<ul>';
                    $concat .= '<li>'. "<a href={$enlace}>" . $colores . '</a>' . '</li>';
             
                 }
                echo $concat;
            ?>

        </table>
    </body>
</html>

<?php 
    $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
    ksort($edades);
    print_r($edades);
    echo "<br>";
    asort($edades);
    print_r($edades);
    echo "<br>";
    krsort($edades);
    print_r($edades);
    echo "<br>";
    arsort($edades);
    print_r($edades);
    echo "<br>";

    $temperaturas='35 40 22 15 36 33 12 0 4 32';
    $separado = explode(" ", $temperaturas);
    $total_veces = count($separado);
    $suma = 0;
    for($i = 0; $i < $total_veces; $i++){
        $suma = $separado[$i] + $suma;
    }
    $media= $suma / $total_veces;
    echo $media;
    rsort($separado);
    echo "<br>";
    echo "Las máximas son: ";
    echo "<br>";
    for($i = 0; $i < 5; $i++){
        echo $separado[$i];
        echo "<br>";
    }
    sort($separado);
    echo "<br>";
    echo "Las mínimas son: ";
    echo "<br>";
    for($i = 0; $i < 5; $i++){
        echo $separado[$i];
        echo "<br>";
    }
    function largaria($a, $b){
        if(strlen($a) == strlen($b)){
            return 0;
        }
        return (strlen($a)<strlen($b)? -1 : 1);
    }
    $palabras= array("Juan"=>"Juan no esta en clase", "Pedro"=> "Pedro si", "Mari Carmen"=>"Su hijo... y no lo sabe", "Pablito"=>"Clavo un clavito, que clavito clavo pablito?");
    uasort($palabras, 'largaria');
    print_r($palabras);
    echo "<br>";
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
        $almacen=[];
        
        $almacen[] = chr(rand(65, 90));
        for ($i=0; $i < $lower; $i++) { 
            $almacen[] = chr(rand(97, 122));
        }
        for ($i=0; $i < $numeric; $i++) { 
            $almacen[] = chr(rand(49, 57));
        }
        for ($i=0; $i < $other; $i++) { 
            $almacen[] = chr(rand(35, 47));
        }
        shuffle($almacen);
        $junto = implode("", $almacen);
        echo $junto;
    }
    rand_Pass();
    function largarias($n){
        return strlen($n);
    }

    $manolo=["hola","holaplatapus","help","amarillo","submarino"];

    $cvari = array_map("largarias", $manolo);
    echo "<br>"; 
    echo max($cvari);
    echo "<br>";
    echo min($cvari);

    echo "<br>";
    $array=["Seguro", "que", "apruebo", "esta", "asignatura"];
    $priemro = [];
    for ($i=1; $i < count($array); $i++) { 
        $priemro[] = [implode(" ", array_slice($array,0,$i)), implode(" ", array_slice($array,$i))];


    }
    

    print_r($priemro);
    echo "<br>";
    echo "<br>";

    //Prueba
    $alumnos = [

        ["nombre" => "Pepe", "edad" => 20],

        ["nombre" => "Pedro", "edad" => 21],

        ["nombre" => "Andrés", "edad" => 22],

        ["nombre" => "Ana", "edad" => 23],

        ["nombre" => "Lola", "edad" => 20]

    ];

    print_r($alumnos);

    echo '<br>';

        

    $filtrarPor = strtolower($_GET["filtrarPor"] ?? "Pepe");

    

    $filtrados = array_filter($alumnos, 

        function($alumno) use ($filtrarPor){

            return strpos(strtolower($alumno["nombre"]), $filtrarPor) !== FALSE;

        });

    print_r($filtrados);
    echo '<br>';


    //Ejercicio filtros
    $contactos = array(

        array("codigo" => 1, "nombre" => "Juan Pérez",

        "telefono" => "966112233", "email" => "juanp@gmail.com"),

        array("codigo" => 2, "nombre" => "Ana López",

        "telefono" => "965667788", "email" => "anita@hotmail.com"),

        array("codigo" => 3, "nombre" => "Mario Montero",

        "telefono" => "965929190", "email" => "mario.mont@gmail.com"),

        array("codigo" => 4, "nombre" => "Laura Martínez",

        "telefono" => "611223344", "email" => "lm2000@gmail.com"),

        array("codigo" => 5, "nombre" => "Nora Jover",

        "telefono" => "638765432", "email" => "norajover@hotmail.com"),

        );

        $filtraDor = strtolower($_GET["filtraDor"] ?? "@gmail.com");

        $filtrado = array_filter($contactos, 

        function($contactos) use ($filtraDor){

            return strpos(strtolower($contactos["email"]), $filtraDor) !== FALSE;

        });
    echo '<br>';


    print_r($filtrado);
?>