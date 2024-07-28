<?php

$arrayMulti = array(
    "frutas" => array("manzana","fresa","pera"),
    "deportes" => array("rugby","futbol","hockey"),
    "idiomas" => array("ingles","español","italiano")
);

var_dump($arrayMulti);

?>
<table border="1">
    <tr>
        <th>Frutas</th>
        <th>Deportes</th>
        <th>Idiomas</th>
    </tr>
    <tr>
        <th><?=$arrayMulti["frutas"][0]?></th>
        <th><?=$arrayMulti["deportes"][0]?></th>
        <th><?=$arrayMulti["idiomas"][0]?></th>
    </tr>
    <tr>
        <th><?=$arrayMulti["frutas"][1]?></th>
        <th><?=$arrayMulti["deportes"][1]?></th>
        <th><?=$arrayMulti["idiomas"][1]?></th>
    </tr>
    <tr>
        <th><?=$arrayMulti["frutas"][2]?></th>
        <th><?=$arrayMulti["deportes"][2]?></th>
        <th><?=$arrayMulti["idiomas"][2]?></th>
    </tr>

</table>

