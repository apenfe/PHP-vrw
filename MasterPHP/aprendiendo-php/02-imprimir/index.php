<!DOCTYPE HTML>

<html lang="es">

    <head>

        <meta charset="utf-8">
        <title>Imprimir por pantalla</title>

    </head>

    <body>

        <h1>Master en <?php echo "PHP" ?> </h1> <!-- PUEDO PONER TODAS LAS ETIQUETAS QUE QUIERA -->

        <?= 'esto es un echo suelto resumido' ?> <!-- ECHO REDUCIDO -->

        <?php

            // TITULAR DE LA SECCION
            echo "<h3>Litsado de videojuegos</h3>";
            echo "<ul>"
                    ."<li>GTA</li>"
                    ."<li>FARCRY</li>"
                    ."<li>FARCRY 5</li>"
                    ."<li>MAVERICK</li>"
                ."</ul>";

            /*
             * COMENTARIO MULTILINEA
             */

            echo '<p>Esta es toda'.'-'.'lista de juegos</p>';
        ?>

    </body>

</html>

