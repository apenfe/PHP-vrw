<?php
/*
 * array de 8 numeros enteros: recorrerlo y mostrarlo, ordenarlo y mostrarlo, mostrar su longitud
 * y buscar algun elemento en el array.
 */

$numeros = [2,4,6,3,1,8,9,10];

foreach ($numeros as $numero) {
    echo $numero.'<br>';
}

$ordenados = sort($numeros);

foreach ($numeros as $numero) {
    echo $numero.'<br>';
}

echo '<br>';
echo count($numeros);

echo '<br>';
echo $numeros[array_search(3,$numeros)];


?>
