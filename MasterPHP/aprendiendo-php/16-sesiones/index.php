<?php
/*
 * Sseion almacena y persiste datos del usuario mientras que navega en un sitio web hasta que se cierra sesion o el navegador
 * se almacena en el servidor web, por lo que es muy seguro
 */

// iniciar sesion
session_start();

$variable_normal = "soy una cadena de texto";

$_SESSION['variable_PERSISTENTE'] = "soy uan cadena de texto de sesion";

echo $variable_normal."<br>";
echo $_SESSION['variable_PERSISTENTE'];
?>
