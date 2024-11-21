<?php
$nombre = "Rosy";

//debuggear
var_dump($nombre);

//fechas
echo date('d-m-y');

echo "</br>";

//fecha en formato unix

echo time();

echo "</br>";

//matematicas

echo "Raiz cuadrada de 10: " .sqrt(10);

echo "</br>";

echo "Nùmero aleatorio entre 10 y 40: " . rand(10, 40);


echo "</br>";

echo "Nùmero PI: " . pi();

echo "</br>";

echo "Redondear: " . round(7.891234);

echo "</br>";

gettype($nombre); //tipo de dato

echo "</br>";

if(!is_float($nombre)){
    echo "La variable nombre no es un nùmero con decimales";
}

echo "</br>";

if(isset($nombre)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}

echo "</br>";

$frase = '            mi contenido        ';
trim($frase);
echo $frase;


echo "</br>";
//eliminar variables o indices

$year = 2024;
unset($year);
var_dump($year);


//empty comprobar variables vacias

$texto = "";
if(empty($texto)){
    echo "La variable texto esta vacia";
}else{
    echo "La variable tiene contenido";
}

//contar caracteres de una cadena
echo "</br>";
$cadena = "123450";

echo strlen($cadena);


echo "</br>";
// encuentra en un string un caracter
$frase = "La vida es bella";

echo strpos($frase, "vida");

//remplazar contenido de un string

echo "</br>";

$frase = str_replace("vida", "moto", $frase);
echo $frase;

//mayusculas y minusculas
echo "</br>";
echo strtolower($frase);
echo "</br>";
echo strtoupper($frase);
?>