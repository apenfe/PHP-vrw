<meta charset="utf-8"/>

<?php

    $numero = 5;
    $factorial = 1;

    while($numero > 0){

        $factorial *= $numero;
        $numero--;
    }

    echo $factorial;

?>