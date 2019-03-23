<?php

class Usuarios
{
    protected $nome;
    protected $email;

    public function __call($metodo, $atributo)
    {
        echo "<hr>Metodo $metodo foi chamado, porem ele não existe os seguintes parametros foram passados";
        echo "<pre>";
        print_r($atributo);
        echo "<hr>";
    }

    public static function __callStatic($metodo, $atributo)
    {
        echo "<hr>Metodo $metodo foi chamado de forma estatica, porem ele não existe os seguintes parametros foram passados";
        echo "<pre>";
        print_r($atributo);
        echo "<hr>";
    
    }
}

$usuario = new Usuarios();
$usuario->setNome("Luciana de Almeida");
Usuarios::listar('sasjahsaj');