<?php
namespace MisClases;

class Usuario
{
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Javier";
        $this->email = "adrian@a.es";
    }
}
