<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Validacion de formularios</title>
    </head>

    <body>
        <h1>Validar formularios en PHP</h1>

        <?php
        if(isset($_GET["error"])){
            $error = $_GET["error"];

            if($error == "faltan valores"){
                echo "<strong style='color:red'>Indroduce todos los valores</strong>";
            }

            if($error == "nombre"){
                echo "<strong style='color:red'>Indroduce un nombre correcto</strong>";
            }

            if($error == "apellidos"){
                echo "<strong style='color:red'>Indroduce un apellido correcto</strong>";
            }

            if($error == "email"){
                echo "<strong style='color:red'>Indroduce un email correcto</strong>";
            }

            if($error == "edad"){
                echo "<strong style='color:red'>Indroduce una edad correcto</strong>";
            }

            if($error == "password"){
                echo "<strong style='color:red'>Indroduce una contraseña correcto</strong>";
            }
        }
        ?>

    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre: </label><br>
        <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br>

        <label for="apellidos">Apellidos: </label><br>
        <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br>

        <label for="edad">Edad: </label><br>
        <input type="number" name="edad" required="required" pattern="[0-9]+"><br>

        <label for="email">Email: </label><br>
        <input type="email" name="email" required="required"><br>

        <label for="pass">Contraseña: </label><br>
        <input type="password" name="pass" required="required"><br>

        <input type="submit" value="Enviar">

    </form>

    </body>

</html>