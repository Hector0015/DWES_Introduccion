<?php 
require('CSession.php');
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
<h2>Registro:</h2>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">


   Nombre:


   <input type="text" name="username" maxlength="50"><br>


   Email:


   <input type="email" name="email"><br>


   
   Contrasenya:
   <input type="password" name="password" maxlength="50"><br>


   Confirmar la contrasenya:
   <input type="password" name="password3" maxlength="50"><br>


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


   if(empty($_POST["username"])){


       $errores[] = "El nombre es requerido";


   }
   if(empty($_POST["password"]) || strlen($_POST["password"]) < 5){

    $errores[] = "La contraseña es requerida y ha de ser mayor a 5 caracteres";

    }
    if(empty($_POST["password3"]) || $_POST["password3"] != $_POST["password"]){
        $errores[] = "La confirmación de la contraseña es necesaria, además debe ser la misma";
    }

   // El email es obligatorio y ha de tener formato adecuado


   if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){


       $errores[] = "No se ha indicado email o el formato no es correcto";


   }
   // Si el array $errores está vacío, se aceptan los datos y se asignan a variables


   if(empty($errores)) {


       $username = filtrado($_POST["username"]);
       $email = filtrado($_POST["email"]);
       $password = filtrado($_POST["password"]);
       $password3 = filtrado($_POST["password3"]);




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


Nombre : <?= $username ?? "" ?> <br>


Email : <?= $email ?? "" ?> <br>
       
Contraseña: <?= $password ?? "" ?> <br>

<?php 
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$sta = $pdo->prepare($sql);
$sta->bindParam(1, $username);
$sta->bindParam(2, $email);
$sta->bindParam(3, $password);

$sta->execute(); ?>


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