<?php

session_start();

if(!isset($_SESSION["numero"])){
    $_SESSION["numero"] = 0;
}

if(isset($_GET["counter"]) && $_GET["counter"] == 1){
    $_SESSION["numero"]++;
}

if(isset($_GET["counter"]) && $_GET["counter"] == 0){
    $_SESSION["numero"]--;
}

?>

<h1>El valor de la sesion nunero es: <?= $_SESSION["numero"] ?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a><br>