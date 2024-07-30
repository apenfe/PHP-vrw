<?php

$frase = 'no cuentes los días, haz que los días cuenten.';

echo $frase;

function holaMundo(){

    global $frase; // permite el uso de variables globales dentro de la funcion
    echo "<h1>".$frase."</h1>";
}

holaMundo();

// funciones variables

function buenosDias(){
    echo "Buenos días.";
}

function buenasTardes(){
    echo "Buenas tardes.";
}

$horario = 'buenasTardes';

$horario();

?>
