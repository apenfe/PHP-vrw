<?php

class Coche
{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona
{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoJuego
{
    public $nombre;
    public $anio;

    use Utilidades;
}

trait Utilidades
{
    public function mostrarNombre()
    {
        echo "<h1>El nombre es: {$this->nombre}</h1>";
    }

}

$coche = new Coche();
$coche->nombre = "Ferrari";
$coche->marca = "Ferrari";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Adrian";
$persona->apellidos = "Peñalver";
$persona->mostrarNombre();

$videojuego = new VideoJuego();
$videojuego->nombre = "GTA";
$videojuego->anio = "2020";
$videojuego->mostrarNombre();