<?php

$color = 'rojo';

if($color == 'rojo'){
    echo 'este es rojo';
}else{
    echo 'NO ES ROJO';
}

/*
 * == IGUAL
 * === IDENTICO
 * != DISTINTO
 * <> DIFERENTE
 * !== NO IDENTICO
 * < MENOR QUE
 * > MAYOR QUE
 * <= MENOR IGUAL QUE
 * >= MAYOR IGUAL QUE
 */

// OPERADORES LOGICOS
/*
 * && AND
 * || OR
 * ! NOR
 */
echo "<br>";
$dia = 5;

switch ($dia){
    case 1:
        echo 'lunes';
        break;
    case 2:
        echo 'martes';
        break;
    case 3:
        echo 'miercoles';
        break;
    case 4:
        echo 'jueves';
        break;
    case 5:
        echo 'viernes';
        break;
    case 6:
        echo 'sabado';
        break;
    case 7:
        echo 'domingo';
        break;
    default:
        echo 'no valido';
}

echo "<br>";
// GOTO
goto marca;
echo 'instruccion 1';
echo 'instruccion 2';
echo 'instruccion 3';
echo 'instruccion 4';

marca:
echo 'me he saltado 4 echos';