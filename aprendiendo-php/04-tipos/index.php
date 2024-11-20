<?php
//las variables no pueden empezar por numero pero si puede contenerlo
//no pueden tener signos
$numero = 100;
$decimal = 27.9;
echo gettype($numero);
echo "</br>".gettype($decimal);

$nombre = 'Rosa Torres';

//var_dump muestra los detalles de la variable
var_dump($nombre);

?>