<?php
//variables globales: se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones

$frase ="Ni los genios son tan genios, ni los medicres tan mediocres";


echo $frase;
function holaMundo() {
    global $frase;
 echo "<h1>$frase</h1>";
 echo "</hr>";
}

holaMundo();
//locales: son las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion 

function fecha(){
    $year = 2024;
    echo "<h1>$year</h1>";
    echo "</hr>";
}

fecha();

//funciones variables

function buenosDias(){
    return "Hola! Buenos dias";
}

echo "</hr>";

$horario = "buenosDias";
echo $horario();
?>