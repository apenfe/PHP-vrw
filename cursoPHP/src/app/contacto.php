
<?php
require_once 'includes/header.php';
?>

<?php
echo $variable_header;
?>

<p>Contacta con nosotros</p>
<form method="POST" action="">
    <input type="text" name="nombre">
    <input type="email" name="email">
    <input type="submit" value="enviar">
</form>

<a href="index.php">Volver a inicio</a>

<?php
require_once 'includes/footer.php';
?>
