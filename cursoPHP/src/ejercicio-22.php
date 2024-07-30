<?php

function tabla($numero, $html = null){

    for ($i=0; $i <= 10; $i++) {
        echo $i." x ".$numero." = ".($i*$numero)."<br>";

    }

    if($html != null){
        echo "se envia parametro opcional";
    }

}

tabla(10 );

tabla(8, true );

?>
