<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Formulario:</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

    Nombre:

    <input type="text" name="nombre" maxlength="50"><br>

    Email:

    <input type="email" name="email"><br>

    Educación:

    <select name="educacion">

        <option value="sin-estudios">Sin estudios</option>

        <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>

        <option value="formacion-profesional">Formación profesional</option>

        <option value="universidad">Universidad</option>

    </select> <br>

    Imagen:
    <input type="file" name="imagen" />

    <br/>

    <input type="submit" name="submit" value="Enviar">

</form>
</body>
</html>

<?php 


function filtrado($datos){

    $datos = trim($datos); // Elimina espacios antes y después de los datos

    $datos = stripslashes($datos); // Elimina backslashes 

    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML

    return $datos;

}



if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

    // El nombre y contraseña son campos obligatorios

    if(empty($_POST["nombre"])){

        $errores[] = "El nombre es requerido";

    }
    // El email es obligatorio y ha de tener formato adecuado

    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){

        $errores[] = "No se ha indicado email o el formato no es correcto";

    }
    // Si el array $errores está vacío, se aceptan los datos y se asignan a variables

    if(empty($errores)) {

        $nombre = filtrado($_POST["nombre"]);

        $email = filtrado($_POST["email"]);

        $educacion = filtrado($_POST["educacion"]);

    }
}


$directorioSubida = "uploads/";

$max_file_size = "51200000";

$extensionesValidas = array("jpg", "png", "gif");

if(isset($_POST["submit"]) && isset($_FILES['imagen'])){

    $errores = array();

    $nombreArchivo = $_FILES['imagen']['name'];

    $filesize = $_FILES['imagen']['size'];

    $directorioTemp = $_FILES['imagen']['tmp_name'];

    $tipoArchivo = $_FILES['imagen']['type'];

    $arrayArchivo = pathinfo($nombreArchivo);

    $extension = $arrayArchivo['extension'];

    // Comprobamos la extensión del archivo

    if(!in_array($extension, $extensionesValidas)){

        $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";

    }

    // Comprobamos el tamaño del archivo

    if($filesize > $max_file_size){

        $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";

    }

    // Comprobamos y renombramos el nombre del archivo

    $nombreArchivo = $arrayArchivo['filename'];

    $nombreArchivo = preg_replace("/[^A-Z0-9._-]/i", "_", $nombreArchivo);

    $nombreArchivo = $nombreArchivo . rand(1, 100);

    // Desplazamos el archivo si no hay errores

    if(empty($errores)){

        $nombreCompleto = $directorioSubida.$nombreArchivo.".".$extension;

        move_uploaded_file($directorioTemp, $nombreCompleto);

        print "El archivo se ha subido correctamente";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_POST["submit"])): ?>

<h2>Mostrar datos enviados</h2>

Nombre : <?= $nombre ?? "" ?> <br>

Email : <?= $email ?? "" ?> <br>

Educación : <?= $educacion ?? "" ?> <br>

<img src="<?= $nombreCompleto?>"/>

<?php endif; ?>
<ul>

<?php if(isset($errores)){

    foreach ($errores as $error){

        echo "<li> $error </li>";

    }

}

?>

</ul>
</body>
</html>