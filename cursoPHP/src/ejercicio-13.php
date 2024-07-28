<?php

$contador = 0;
$array = [];

do{

    array_push($array, $contador);
    $contador++;

    if($contador == 100){
        break;
    }

}while(true);

for ($i=0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
}

?>
