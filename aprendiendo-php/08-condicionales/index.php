<?php
$color = 'rojo';

if($color == 'rojo'){
    echo "El color el rojo";
}else{
    echo "El color No es rojo";
}



//SWITCH

$dia = 4;

switch ($dia){
    case 1: 
        echo "LUNES";
        break;
    case 2: 
        echo "MARTES";
        break;
    case 3: 
        echo "MIERCOLES";
         break;
    case 4:
        echo "JUEVES";
        break;
    case 5: 
        echo "VIERNES";
        break;
    default:
        echo "FIN DE SEMANA";
        break;                 
}


//GOTO

goto marca;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

marca:
echo " </br> Me he satado 4 echos"
?>



