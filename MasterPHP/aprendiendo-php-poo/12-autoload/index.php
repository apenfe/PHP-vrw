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