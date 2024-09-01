<?php

/* escribir programa php añada valores array mientras longitus sea menor que 120, luego mostraarlo pantalla
 */

$coleccion = array();

for ($i = 0; $i < 120; $i++) {
    array_push($coleccion, $i);
}

var_dump($coleccion);
