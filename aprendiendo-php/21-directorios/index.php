<?php

if(!is_dir('mi_carpeta')){
//0777, es para darle todos los permisos
mkdir('mi_carpeta', 0777) or die("No se puede crear la carpeta");
}else{
    echo 'ya existe la carpeta';
}

//eliminar carpeta
// rmdir('mi_carpeta');

echo "</br>";

//mostrar contenido de la carpeta
if($gestor = opendir('./mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
        echo $archivo ."</br>";
        }
    }
}
?>