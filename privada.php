<?php 
        $dejameEntrar = $_GET['dejameEntrar'] ?? '';
        if($dejameEntrar == 1){
            print('Bienvenido');
        }else{
            header('Location: login.php');
        }

?>