<?php include 'includes/header.php'; ?>

<?php

if(!isset($_GET['id']) || empty($_GET['id']) || !is_numeric($_GET['id'])){
        header('Location: index.php');
}

$id = $_GET['id'];
$user_query = mysqli_query($db, "SELECT * FROM users where usuario_id = '$id';");
$user = mysqli_fetch_assoc($user_query);

if(!isset($user['usuario_id']) || empty($user['usuario_id'])){
    header('Location: index.php');
}
?>

<h3>Usuario: <strong><?php echo $user['name']." ".$user['apellidos']; ?></strong></h3>
<p>Datos:</p>
<p>
    Email: <?php echo $user['email']; ?><br>
</p>
<p>
    Biografia: <?php echo $user['biografia']; ?><br>
</p>

<hr>
<a href="index.php" class="ntn btn-success">Volver a inicio</a>

<?php include 'includes/footer.php'; ?>
