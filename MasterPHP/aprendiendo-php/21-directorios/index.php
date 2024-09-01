<?php

if(!is_dir("mi_carpeta")){
    mkdir("mi_carpeta", 0777) or die("no se puesde crear la carpeta");
}else{
    echo "ya existe la carpeta";
}

rmdir("mi_carpeta");

?>
