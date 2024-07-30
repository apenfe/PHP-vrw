<?php

function tabla($numero){

    for ($i=0; $i <= 10; $i++) {
        echo $i." x ".$numero." = ".($i*$numero)."<br>";
    }

}

tabla(10);

?>
