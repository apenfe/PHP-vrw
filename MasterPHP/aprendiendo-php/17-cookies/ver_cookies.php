<?php

// $_COOKIE ES UNA VARIABLE SUPERBLOBAL PARA PODER ACCEDER A LAS COOKIES, es un array asociativo

if(isset($_COOKIE["galleta"])){
    echo "<h1>".$_COOKIE['galleta']."</h1>";
}else{
    echo "<h1>No hay cookies</h1>";
}

if(isset($_COOKIE["unyear"])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo "<h1>No hay cookies</h1>";
}

?>

<a href="borrarCookies.php">Borrar cookies</a>
