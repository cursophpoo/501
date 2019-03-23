<?php

class Usuarios
{
    protected $nome;
    protected $email;

    private function atribuir($atributo, $valor)
    {
        $atributo = strtolower($atributo);
        if(property_exists($this, $atributo)){
            $this->$atributo = $valor;
        }

    }

    private function retornar($atributo)
    {
        $atributo = strtolower($atributo);
        if(property_exists($this, $atributo)){
            return $this->$atributo;
        }

    }

    public function __call($metodo, $atributo)
    {

        $prefix = substr($metodo, 0 ,3);
        $nomeAtributo = substr($metodo, 3);    

        switch($prefix){
            case 'set':
                $this->atribuir($nomeAtributo, $atributo[0]);
                break;
            case 'get':
                return $this->retornar($nomeAtributo);
                break;    
            default:
                echo "<hr>Metodo invalido";
        }

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
$usuario->setEmail("lu@gmail.com");


echo "Nome: " . $usuario->getNome();
echo "<br>Email: " . $usuario->getEmail();

echo "<hr><pre>";
var_dump($usuario);