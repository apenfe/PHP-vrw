<?php
/*
 *  muestre todos los numeros entre dos numero que llegan por url, solo impares
 */

if(isset($_GET['num1']) && isset($_GET['num2'])){

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    if($num1 < $num2){

        for($i = $num1; $i <= $num2; $i++){

            if($i % 2 != 0){
                echo $i."<br>";
            }

        }

    }else if($num1 > $num2){

        for($i = $num2; $i <= $num1; $i++){
            if($i % 2 != 0){
                echo $i."<br>";
            }
        }
    }else{
        echo $num1."<br>";
    }

}else{
    echo "inserte dos numeros por url";
}
?>