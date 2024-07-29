<?php
 /*
  *  muestre todos los numeros entre dos numero que llegan por url
  */

if(isset($_GET['num1']) && isset($_GET['num2'])){

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    if($num1 < $num2){

        for($i = $num1; $i <= $num2; $i++){
            echo $i."<br>";
        }

    }else if($num1 > $num2){

        for($i = $num2; $i <= $num1; $i++){
            echo $i."<br>";
        }
    }else{
        echo $num1."<br>";
    }

}else{
    echo "inserte dos numeros por url";
}

?>
