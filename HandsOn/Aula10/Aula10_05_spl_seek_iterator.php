<?php

class Usuarios implements ArrayAccess, Countable, SeekableIterator
{
    private $usuarios = [];
    private $index = 0;

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

    public function count()
    {
        return count($this->usuarios);
    }

    public function current()
    {
        return $this->usuarios[$this->index];
    }

    public function next(){
        return $this->index++;
    }

    public function valid(){
        return isset($this->usuarios[$this->index]);
    }

    public function rewind()
    {
        return $this->index = 0;
    }

    public function key()
    {
        return $this->index;
    }

    public function seek($position)
    {
        return $this->usuarios[$position];
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

echo "<h1>Total de Usuarios: " . count($usuarios) . "</h1>";

echo "<h2>Busca o usuario</h2>";

echo "<pre>";
print_r($usuarios->seek(1));
echo "<hr>";