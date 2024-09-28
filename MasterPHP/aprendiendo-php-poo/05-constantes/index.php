<?php

class Usuario
{
    public $email;
    public $password;
    public const URL_COMPLETA = "http://localhost";

    public function getEmail()
    {
        return self::URL_COMPLETA ."/". $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}

$usuario = new Usuario();
$usuario->setEmail("a@a.es");
$usuario->setPassword("1234");

echo $usuario::URL_COMPLETA;
echo "<br>";
echo $usuario->getEmail();
