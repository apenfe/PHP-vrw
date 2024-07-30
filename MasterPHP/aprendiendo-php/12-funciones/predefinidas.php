<?php

$nombre = 'adrian';
// debug
var_dump($nombre);
echo '<br>';

echo date('d/m/Y');
echo '<br>';

echo time();
echo '<br>';

// matematicas
echo sqrt(4);
echo '<br>';

echo rand(10,40);
echo '<br>';

echo pi();
echo '<br>';

echo floor(2.6);
echo '<br>';

echo round(7.891234, 2);
echo '<br>';

// otras

echo gettype($nombre);
echo '<br>';

if(is_string($nombre)){
    echo 'es un string<br>';
}

if(isset($nombre)){
    echo 'la variable si existe<br>';
}

$frase = "   esto es para trim   ";
echo $frase;
echo '<br>';

echo trim($frase);
echo '<br>';

// eliminar varibales o indices de arrays

$year = 2020;
unset($year);
var_dump($year);
echo '<br>';

// ver si una variables esta viacia
$texto = "";

if(empty($texto)){
    echo 'la variable esta vacia';
}
echo '<br>';
$texto = "123456";
echo strlen($texto);
echo '<br>';

// encontrar carcater o palabra
$frase = 'la vida es bella';
echo strpos($frase, 'vida');
echo '<br>';
// reemplazar palabras
$frase = str_replace('vida','moto',$frase);
echo $frase;

// mayusculas y minusculas
echo '<br>';
echo strtoupper($frase);
echo '<br>';
echo strtolower($frase);
echo '<br>';

?>
