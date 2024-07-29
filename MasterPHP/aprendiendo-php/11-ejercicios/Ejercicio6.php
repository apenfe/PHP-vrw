<?php

/*
 * imprimir todas las tablas del 1 al 10 y mostrarlas dentro de un table html
 */

echo '<table border="1">';

echo '<tr>';
for($i = 0; $i <= 10; $i++){
    echo '<th>Tabla del '.$i.'</th>';
}
echo '</tr>';

for($i = 0; $i <= 10; $i++){
    echo '<tr>';

    for($j = 0; $j <= 10; $j++){
        echo '<td>';
            echo $i .' x '. $j .' = '. $i*$j;
        echo '</td>';
    }

    echo '</tr>';
}

echo '</table><br>';

?>
