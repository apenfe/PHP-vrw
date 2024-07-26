<?php

    for($i = 0 ; $i <= 30; $i++){

        $cuadrado = $i * $i;
        echo "El cuadrado de ". $i. " es: ". $cuadrado . "<br/>";

        if($cuadrado % 2==0){
            echo "El cuadrado". $cuadrado . " es par <br/>";
        }else{
            echo "El cuadrado". $cuadrado . " es impar <br/>";
        }
    }

?>