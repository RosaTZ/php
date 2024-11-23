<?php
    require '../server.php';

    $users = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    surname VARCHAR(255),
    age VARCHAR(2),
    genre VARCHAR(1),
    phone VARCHAR(12),
    email VARCHAR(255),
    password VARCHAR(255),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );";
    
    if($coneccion->query($users)){
        echo "Tabla insertada correctamente";
    }else{
        echo "Error:".$coneccion->error;
    }
    
    $coneccion->close();

?>