<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
</head>

<body>

    <h1>Subir archios con php</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="enviar">
    </form>

    <h1>Listado de imagenes</h1>
    <?php
    $gestor = opendir('./images');
    if($gestor){
        while(($imagen = readdir($gestor)) !== false){
            if($imagen != "." && $imagen != ".."){
                echo "<img src='images/$imagen' width='200px' height='200px'/>";
            }
        }
        closedir($gestor);
    }
    ?>

</body>

</html>