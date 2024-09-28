<?php

function app_autoloader($class){
    include 'clases/' . $class . '.php';
}

spl_autoload_register('app_autoloader');

?>