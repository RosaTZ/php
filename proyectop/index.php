<?php

function constructor() {
    include_once 'server.php';
    
    mysqli_query($coneccion, "SET NAMES 'UTF8'");

    if (!$coneccion) {
        die("Error de conexión: " . mysqli_connect_error());
    } else {
        echo "Conexión exitosa";
    }
    
}


constructor();

?>