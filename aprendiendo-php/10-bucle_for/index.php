<?php
$resultado = 0;

for ($i=0; $i <= 100 ; $i++) { 
   $resultado += $i;
   
}

echo "<h1>El resultado es: $resultado</h1>";

$numero = 45;

for($i = 0; $i <= 12; $i++){

   if($numero == 45){
      echo "No se pueden mostrar estas operaciones prohibidas";
      break;
   }
echo "$numero x $i = "  .($numero * $i) ."</br>";
}
?>