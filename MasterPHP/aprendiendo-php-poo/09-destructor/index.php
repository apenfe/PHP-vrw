<?php

class Usuario
{
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Adrian";
        $this->email = "a@a.es";
        echo "Instancia del objeto creada <br>";
    }

    public function __destruct() {
        echo "Destruyendo el objeto";
    }

    public function __toString() {
        return "Hola, {$this->nombre}, estas registrado con {$this->email}". "<br>";
    }

}

$usuario = new Usuario();

echo $usuario->nombre;
echo "<br>";
echo $usuario->email;
echo "<br>";

echo $usuario;

