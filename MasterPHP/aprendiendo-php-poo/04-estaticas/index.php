<?php

require_once 'configuracion.php';

Configuracion::setColor('blue');
Configuracion::setNewsletter(true);
Configuracion::setEntorno('localhost');

echo Configuracion::getColor(). "<br>";
echo Configuracion::getNewsletter() . "<br>";
echo Configuracion::getEntorno() . "<br>";

echo Configuracion::$color . " -> es el color<br>";