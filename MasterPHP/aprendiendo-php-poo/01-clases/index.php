<?php

// poo en php

class Coche {
    // Atributos o propiedades (variables)
    public $color = 'Rojo';
    public $marca = 'Ferrari';
    public $modelo = 'Aventador';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

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

$coche = new Coche();

$color = $coche->getColor();
echo "<h1>".$color."</h1>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

echo $coche->getInfo();
