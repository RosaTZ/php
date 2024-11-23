<?php
use Dotenv\Dotenv;
require __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$coneccion = mysqli_connect(
        $_ENV['URL'], 
        $_ENV['NAME'], 
        $_ENV['CLAVE_DB'], 
        $_ENV['DB_NAME']
    );  

    ?>