<meta charset="utf-8"/>
<?php

$num = 1;
$multiplicacion = 1;

    while($num <= 20){

        $multiplicacion *= $num;
        echo $multiplicacion."<br/>";
        $num += 1;
    }

    echo $multiplicacion;

?>