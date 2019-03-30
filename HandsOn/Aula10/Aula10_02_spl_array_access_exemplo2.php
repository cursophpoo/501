<?php

class Usuarios implements ArrayAccess
{
    private $usuarios = [];


    public function offsetExists($offset)
    {   
        return isset($this->usuarios[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->usuarios[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if(!isset($offset)){
            return $this->usuarios[] = $value;
        }
        
        return $this->usuarios[$offset] = $value;
        
    }

    public function offsetUnset($offset)
    {
        unset($this->usuarios[$offset]);
    }

}

class Usuario
{
    protected $nome;
    protected $email;
    protected $senha;

    public function __construct($nome, $email, $senha)
    {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

$usuarios = new Usuarios();
$usuarios[] = new Usuario(
    "Carolina dos Santos 1",
    "carol.santos_1@gmail.com",
    "123456"
);

$usuarios[] = new Usuario(
    "Carolina dos Santos 2",
    "carol.santos_2@gmail.com",
    "123456"
);

$usuarios[] = new Usuario(
    "Carolina dos Santos 3",
    "carol.santos_3@gmail.com",
    "123456"
);

$usuarios[10] = new Usuario(
    "Carolina dos Santos 10",
    "carol.santos_10@gmail.com",
    "123456"
);

var_dump($usuarios[10]);
echo "<hr>";

echo "Nome Usuario " . $usuarios[10]->getNome();
echo "<br>Email " . $usuarios[10]->getEmail();
echo "<br>Senha " . $usuarios[10]->getSenha();
echo "<hr>";
echo "<pre>";

print_r($usuarios);