<meta charset="utf-8"/>

<?php

    var_dump($_GET);

    if(isset($_GET["nombre"]) && is_numeric($_GET["nombre"])){
        $numero = $_GET["nombre"];
    }else{
        $numero = 5;
    }

    echo "<h2>Tabla de multiplicar del ".$numero."</h2>";
    for($i = 0; $i <= 10; $i++){
        echo $i. " x ". $numero. " = ". ($numero*$i)."<br/>";
    }

?>