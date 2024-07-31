<?php

$peliculas = array('uno','dos');
$cantantes = ['drake','2pac'];

echo $peliculas[1];

for($i = 0; $i < count($peliculas); $i++) {
    echo $peliculas[$i].'<br>';
}

foreach ($cantantes as $cantante) {
    echo $cantante.'<br>';
}

// arrays asociativos

$personas = ['nombre' => 'adrian', 'apellido' => 'gilabert'];

echo $personas['nombre'].' '.$personas['apellido'];

// arrays multidimensionales
echo '<br>';
$contactos = [
    ['nombre' => 'adrian', 'apellido' => 'gilabert'],
    ['nombre' => 'juan', 'apellido' => 'esponja'],
    ['nombre' => 'patricio', 'apellido' => 'estrella']
];

echo $contactos[0]['apellido'];
echo '<br>';
foreach ($contactos as $key => $contacto) {
    echo $contacto['apellido'].' '.$contacto['nombre'] . '<br>';
}

?>
