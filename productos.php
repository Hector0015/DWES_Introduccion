<?php 
        $id = $_GET['id'] ?? '';
        $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
        if(array_key_exists($id, $productos)){
            echo 'Producto: ' . $productos[$id];
        }else{
            http_response_code('404');
            echo "<script>alert('No esta este producto en el array');</script>";
        }
?>