<?php

echo "<h1>Manejo de errores en PHP</h1>";

try {
    throw new Exception("Error de programación");
} catch (Exception $e) {
    echo "Ha ocurrido una excepción: " . $e->getMessage()."<br>";
} finally {
    echo "Esto siempre se ejecuta". "<br>";
}

echo "Hola Mundo";
