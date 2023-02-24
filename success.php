<?php
    print_r($_REQUEST);

    $nombreArchivo = "datosSuccess.txt";
    $archivo = fopen($nombreArchivo, "w");
    fwrite($archivo, implode(",", $_REQUEST));
    fclose($archivo);
?>