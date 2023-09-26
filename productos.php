<?php 
        $id = $_GET['id'] ?? '';
        $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
        if(array_key_exists($id, $productos)){
            print('Existe');
        }else{
            http_response_code(404);
        }
?>