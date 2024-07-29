<?php

function factorial($n) {
    $factorial = 1;

    for($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

echo factorial(5);

?>
