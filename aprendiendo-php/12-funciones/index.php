<?php


function calculadora($num1, $num2, $negrita = false){

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;
    $resto = $num1 % $num2;
$cadena_texto = "";

$cadena_texto .= "Suma: $suma </br>";
$cadena_texto .= "Resta: $resta </br>";
$cadena_texto .= "Multiplicaciòn: $multiplicacion </br>";
$cadena_texto .= "Divisiòn: $division </br>";
$cadena_texto .= "Resto: $resto </br>";

if($negrita){
    $cadena_texto .= "</hr>";
}

$cadena_texto .= "</hr>";

return $cadena_texto;

}

echo calculadora(10, 20, true)

?>