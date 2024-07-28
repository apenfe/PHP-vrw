<?php
$array = [1,2];
$string = "soy texto";
$bool = true;

if(is_array($array)){
    echo 'array<br>';
}

if(is_string($string)){
    echo 'texto<br>';
}

if(is_bool($bool)){
    echo 'booleano<br>';
}

echo gettype($array)."<br>";
echo gettype($string)."<br>";
echo gettype($bool)."<br>";

?>
