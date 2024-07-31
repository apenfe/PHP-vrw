<?php

$cantantes = ['drake','2pac','Jennifer Lopez','Alfredo'];
$numeros = [1,2,5,3,8,20,10];

asort($cantantes);
print_r($cantantes);

sort($numeros);
print_r($numeros);

echo "<br>";
// añadir elementos al array
$cantantes[] = "Natos";
var_dump($cantantes);

echo "<br>";
array_push($cantantes,'Battiato');
array_pop($cantantes);
unset($cantantes[2]);
var_dump($cantantes);

echo "<br>";
echo $cantantes[array_rand($cantantes)];

// reverse
$numeros_volteados = array_reverse($numeros);
var_dump($numeros_volteados);
echo "<br>";

// buscar en array
$indice = array_search('drake',$cantantes);
echo $cantantes[$indice];
echo "<br>";


?>
