<?php

/*
 * cookies almacenan datos en el navegador y el servidor, por lo que no son tan seguras,
 * sinven por ejemplo pra recordar contrseñas, direcciones, etc...
 * El usurio podria manipularlas y se puede almacenar poca cantidad
 */

// crear cookies
//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio)

// cookie basica
setcookie("galleta", "valor de mi galleta");

// cookie con expiracion
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver cookies</a>


