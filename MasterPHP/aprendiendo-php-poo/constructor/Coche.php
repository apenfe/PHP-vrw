<?php

class Coche {
    // Atributos o propiedades (variables)
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca){
        $this->color= $color;
        $this->marca = $marca;
        $this->modelo = "Aventador";
        $this->velocidad = 300;
        $this->caballaje = 500;
        $this->plazas = 2;


    }

    // GENERAA METODO PARA SALUDAR DICIENDO EL NOMBRE DEL MODELO
    public function saludar() {
        return "Hola, soy un ".$this->modelo;
    }

    // Métodos, son acciones que hace el objeto (funciones)
    public function getColor() {
        // Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setVelocidad($velocidad) {
        $this->velocidad = $velocidad;
    }

    public function setCaballaje($caballaje) {
        $this->caballaje = $caballaje;
    }

    public function getCaballaje() {
        return $this->caballaje;
    }

    public function setPlazas($plazas) {
        $this->plazas = $plazas;
    }

    public function getPlazas() {
        return $this->plazas;
    }

    public function getInfo() {
        return "El coche que tengo es un ".$this->marca." ".$this->modelo." de color ".$this->color." con una velocidad de ".$this->velocidad." km/h, con un caballaje de ".$this->caballaje." y con ".$this->plazas." plazas.";
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function acelerar() {
        $this->velocidad++;
    }

    public function frenar() {
        $this->velocidad--;
    }

}