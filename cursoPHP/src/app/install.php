<?php
require_once 'includes/connect.php';

$sql = "CREATE TABLE IF NOT EXISTS users(
    usuario_id int(255) auto_increment not null,
    name varchar(255),
    apellidos varchar(255),
    biografia text,
    email varchar(255),
    password varchar(255),
    role varchar(255),
    imagen varchar(255),
    CONSTRAINT pk_users PRIMARY KEY (usuario_id));";

$create_usuarios_table = mysqli_query($db,$sql);

if($create_usuarios_table){
    echo 'tabla creada correctamente';
}
?>
