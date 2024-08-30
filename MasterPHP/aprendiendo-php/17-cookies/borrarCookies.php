<?php

if(isset($_COOKIE["galleta"])){
    unset($_COOKIE["galleta"]);
    setcookie("galleta", "", time() - 100);
}else{
    echo "<h1>No hay cookie llamada galleta</h1>";
}

header("Location: ver_cookies.php");
?>
