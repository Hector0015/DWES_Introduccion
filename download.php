<?php 
    header('Content-Type: application/zip');

    //header('Content-Length: 1000000');
    //Mejor dejar esto de arriba puesto que comentado

    header('Content-Disposition: attachment; filename="download.zip"');

    for ($i = 0; $i < 1000; $i++){
        echo str_repeat(".",1000);

        usleep(50000);
    }
?>