<?php

/*
 * coger dos numeros por get y hacer una calculadora basica
 */

if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    echo "SUMA: ". $num1 + $num2 . "<br>";
    echo "resta: ". $num1 - $num2 . "<br>";
    echo "multi: ". $num1 * $num2 . "<br>";
    echo "div: ". $num1 / $num2 . "<br>";
}else{
    echo "inserte dos numeros por url";
}

?>
