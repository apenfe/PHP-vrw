<?php

require_once 'autoload.php';

use MisClases\usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal {
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
        $this->usuario = new usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function informacion() {
        echo __CLASS__;
        echo "<br>";
        echo __DIR__;
    }

}

$usuario = new UsuarioAdmin();
var_dump($usuario);
echo "<br>";

$principal = new Principal();
var_dump($principal->usuario);
echo "<br>";
var_dump($principal->categoria);
echo "<br>";
var_dump($principal->entrada);

echo "<br>";
var_dump(get_class_methods($principal)); // devuelve los métodos de la clase

// comprobar si existe una clase
$clase = @class_exists('MisClases\Usuario');
if ($clase) {
    echo "<h1>La clase si existe</h1>";
} else {
    echo "<h1>La clase no existe</h1>";
}
echo "<br>";

$clase = @class_exists('PanelAdministrador\Usuarios');
if ($clase) {
    echo "<h1>La clase si existe</h1>";
} else {
    echo "<h1>La clase no existe</h1>";
}

$principal->informacion();