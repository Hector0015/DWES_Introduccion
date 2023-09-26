<?php 
    $modo = $_GET['modo'] ?? $_COOKIE['modo'] ?? "oscuro";
    setcookie("modo", $modo, time() + 30 * 24 * 60 * 60);
    $_COOKIE["modo"] = $modo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color.css" />
    <title>Document</title>
</head>
<body class="<?=$modo?>">
    <p>Modos:</p>
    <p><a href="Cookies.php?modo=claro">Claro</a></p>
    <p><a href="Cookies.php?modo=oscuro">Oscuro</a></p>

</body>
</html>

<?php

    $language = "";

    //Crea aquí tu script para seleccionar el idioma

    

    //Fin script

    if ($language == "en"){

        $content = "This page is in English";

        $title = "Change the language of the page";

    }else{

        $content = "Esta página está en Castellano (Idioma por defecto)";

        $title = "Cambiar el etiquetaidioma de la página";

    }

?>
<!--nO HACER -->
<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="author" content="Víctor Ponz">

</head>    

<body>

    <ul><?= $title ?>

        <li><a href='idioma.php?setLanguage=es'>Español</a></li>

        <li><a href='idioma.php?setLanguage=en'>Inglés</a></li>

    </ul>

    <?= $content ?>

</body>

</html>