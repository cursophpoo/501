<?php

class Usuarios
{
    public $nome;

    public function __clone()
    {
        echo "<hr>Objeto Clonado<hr>";
    }
}

$usuario1 = new Usuarios;
$usuario1->nome = "Michele Santos Leal";

//$usuario2 = $usuario1;
$usuario2 = clone $usuario1;

$usuario2->nome = "Daniele Fernando Ribeiro";

echo "Nome usuario1: " . $usuario1->nome;
echo "<br>Nome usuario2: " . $usuario2->nome;