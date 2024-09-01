<?php

$archivo = fopen("fichero-texto.txt", "a+");

while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido . "<br>";
}

// escribir en el archiivo

fwrite($archivo,"\nsoy un texto escrito en php");

fclose($archivo);


// copiar
copy("fichero-texto.txt", "./fichero-copiado.txt") or die("error al copiar");

//renonbrar fchero
rename("fichero-copiado.txt","fichero-copiado-nuevonombre.txt");

// eliminar
unlink("fichero-copiado-nuevonombre.txt");

// comprobar si existe un archivo
if(file_exists("fichero-texto.txt")){
    echo "existe el archivo";
}else{
    echo "No existe el archivo";
}
