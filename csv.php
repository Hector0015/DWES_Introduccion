<?php 
    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];

    $filename = "productos.csv";

    $csv_content = '';
    foreach ($productos as $id => $nombre) {
        $csv_content .= $id . ';' . $nombre . "\n";
    }

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    echo $csv_content;
?>