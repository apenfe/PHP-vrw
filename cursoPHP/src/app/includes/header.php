
<?php require_once 'connect.php'; ?>

<!DOCTYPE HTML>

<html>
    <head lang="es">
        <meta charset="utf-8">
        <title>Web con PHP</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body>
    <div class="container">

        <h1>WEB CON PHP</h1>
        <hr/>

        <a href="crear.php" class="btn btn-primary">Crear nuevo usuario</a>
        <hr>

        <?php
        $variable_header = "contenido del header"; // sera visible para lo que este debajo verticalmente
        ?>