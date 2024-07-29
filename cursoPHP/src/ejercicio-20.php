<?php

$email = "";

if(isset($_GET["email"])){
    $email = $_GET["email"];
}

function validateEmail($email){

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}

if(validateEmail($email)){
    echo "El email $email es valido";
}else{
    echo "El email $email NO es valido";
}

?>
