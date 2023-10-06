<?php
require('CSession.php');
session_start();
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
 }
    $errores = [];
    if(isset($_POST["submit"])){   
        $username = filtrado($_POST["username"]);
        $password = ($_POST["password"]); 
        if(empty($_POST["username"])){
            $errores[] = "El nombre es requerido";
        }
        if(empty($_POST["password"])){
     
         $errores[] = "La contraseña es requerida";
     
         }
         if(!$errores){
            $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
            $stm = $pdo->prepare($sql);

            $stm->bindParam(1, $username);
            $stm->bindParam(2, $password);
            $resultado = $stm->execute();
            $registro = $stm->fetch();
            if($registro){
                $_SESSION["username"] = $username;
                header('location: SPrivada.php');
                
            }else{
                $errores[] = "Login incorrecto";
            }
         }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="SLogin.php" method="post">
    Usuario<input type="text" name="username"/><br/>
    Contraseña<input type="password" name="password"/><br/>
    <input type="submit" name="submit" value="Enviar"/>
    </form>
    <ul>
<?php if(isset($errores)){
   foreach ($errores as $error){
       echo "<li> $error </li>";
   }
}
?>
</ul>
<a href='SFormulario.php'>Registro</a>

</body>
</html>