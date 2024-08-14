<?php

session_start();

if(isset($_SESSION['logged']) && $_SESSION['logged']['role'] == 'Administrador'){

    require_once 'includes/connect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $delete = mysqli_query($db,"DELETE FROM users WHERE usuario_id = '{$id}';");
    }

}

header("Location: index.php");

?>
