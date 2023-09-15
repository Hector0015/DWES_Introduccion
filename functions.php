<?php 
    function resta($a,$b){
        return $a - $b;
    }

    $resultado = resta(15,3);
    echo $resultado;
    //defecto
    function precio_con_iva($precio, $iva = 0.21){
        return $precio * (1+$iva);
    }
    $precio = 10;
    $precio_iva = precio_con_iva($precio);
    echo $precio_iva;
    echo "<br>";
    //anonimo
    $anonimo = function ($nombre){
        echo "Carmeeeeen te llama {$nombre}";
    };
    $anonimo('David');
    //superior
    function saluda(callable $fnSaluda) {
        $fnSaluda('Hugo');
    }
    $saludo = 'Q tal?';
    $anonima = function ($nombre) use ($saludo) {
        echo "{$saludo} {$nombre}";
    };
    echo "<br>";
    saluda($anonima);
?>