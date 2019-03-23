<?php

class Usuarios
{
    public $nome;
    public $email;
    public $senha; 

    public function __toString()
    {
        $result = "{
            'nome' : '{$this->nome}',
            'email' : '{$this->email}'    
        }";
        return $result;
    }
}

$usuario = new Usuarios();
$usuario->nome = "Joquinha";
$usuario->email = "j.quinha@joquinha.com.br";
$usuario->senha = "123456";


echo $usuario;