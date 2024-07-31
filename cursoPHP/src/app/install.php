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

$sql1 = "insert into users values(null,'adrian','peñalver','esta es la biografia','a@a.com','".sha1('pass')."','1',null);";
$sql2 = "insert into users values(null,'mario','casas','esta es la otra biografia','er@a.onion','".sha1('pass')."','1',null);";
$sql3 = "insert into users values(null,'lucia','suegra','no tengo biografia','a@e.es','".sha1('pass')."','1',null);";

$insert_user1 = mysqli_query($db,$sql1);
$insert_user2 = mysqli_query($db,$sql2);
$insert_user3 = mysqli_query($db,$sql3);

mysqli_error($db);

if($create_usuarios_table){
    echo 'tabla creada correctamente'.'<br>';
}

if($insert_user1){
    echo 'dato insertado correctamente'.'<br>';
}

if($insert_user2){
    echo 'dato insertado correctamente'.'<br>';
}

if($insert_user3){
    echo 'dato insertado correctamente'.'<br>';
}
?>
