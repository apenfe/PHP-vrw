<!DOCTYPE HTML>

<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>_GET</title>
    </head>

    <body>

        <h1>Formulario en PHP</h1>

        <form method="GET" action="recibir.php">

            <p>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos">
            </p>

            <input type="submit" value="Enviar">

        </form>
    <?php

    ?>

    </body>

</html>
