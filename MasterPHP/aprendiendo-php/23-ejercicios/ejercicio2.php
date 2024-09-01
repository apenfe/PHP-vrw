<?php

function validarEmail($email)
{
    $status = false;
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = true;
    }

    return $status;
}

if(isset($_GET["email"])){
    echo validarEmail($_GET["email"]);
}else{
    echo "No hay parametro email";
}

?>
