<?php

interface iOrdenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements iOrdenador {
    public $modelo;

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function encender() {
        return "Encendido";
    }

    public function apagar() {
        return "Apagado";
    }

    public function reiniciar() {
        return "Reiniciado";
    }

    public function desfragmentar() {
        return "Desfragmentado";
    }

    public function detectarUSB() {
        return "Detectado";
    }
}

$mac = new iMac();
$mac->setModelo("iMac Pro 2019");
echo $mac->getModelo();
echo "<br>";

echo $mac->encender();
echo "<br>";
echo $mac->apagar();
echo "<br>";
echo $mac->reiniciar();
echo "<br>";
echo $mac->desfragmentar();
echo "<br>";
echo $mac->detectarUSB();
echo "<br>";
