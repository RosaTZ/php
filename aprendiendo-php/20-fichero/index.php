<?php
/** 
//abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

//leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
echo $contenido."</br>";
}



//escribir en archivo

fwrite($archivo, "</br> Soy un texto ingresado desde php");

//cerrar archivo
fclose($archivo);
*/

//copiar archivo
copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

//renombrar fichero

rename('fichero_copiado.txt', 'nuevo_archivo.docs');


//eliminar fichero

unlink('nuevo_archivo.docs') or die("Error al borrar archivo");

//comprobar si existe el archivo

if(file_exists("fichero_texto.txt")){
    echo "El archivo existe";
}else{
    echo "el archivo no existe";
}
?>