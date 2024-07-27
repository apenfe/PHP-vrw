<?php

/*
 * Tipos de datos:
 *
 * Enteros (int): 99
 * Decimales (float/double): 3.45
 * Cadenas (String): 'texto'
 * Booleano: true / false
 * null
 *
 * Arrays: coleccion de datos
 * Objetos
 *
 */

$numero = 5;
echo gettype($numero)."<br>";

$decimal = 5.5;
echo gettype($decimal)."<br>";

$texto= "hola, voy a pintar una variable sin concatenar: $numero"; // solo funciona con comillas dobles, es mejor usar simples y concatenar
echo gettype($texto)."<br>";

$boolean = true;
echo gettype($boolean)."<br>";

$nula = null;
echo gettype($nula)."<br>";

var_dump($texto); // hace un pequeño debug de la variable

?>
