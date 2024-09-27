<?php

class Persona{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function hablar(){
        return "Estoy hablando";
    }

    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona{

    public $lenguajes;

    public function __construct(){
        $this->lenguajes=["HTML, CSS, JS"];
    }

    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }

    public function programar(){
        return "Soy programador";
    }

    public function repararOrdenador(){
        return "Reparo ordenadores";
    }
}

class TecnicoRedes extends Informatico{

    public $auditarRedes;

    public function __construct() {
        parent::__construct();
        $this->auditarRedes = "Estoy auditando una red";
    }

    public function auditoria(){
        return "Estoy auditando una red";
    }

}