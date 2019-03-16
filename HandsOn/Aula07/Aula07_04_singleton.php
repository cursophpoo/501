<?php

class Banco
{
    public static $objetos;

    public function conectar()
    {
        echo "<hr>Conectado ao Banco<hr>";
        self::$objetos++;
    }
}

class BancoSingleton
{
    public static $objetos;

    public static $conexao;

    private function _construct()
    {}

    public static function getConexao()
    {
        if(!self::$conexao){
            self::$conexao = new self();

            echo "<hr>Conectando ao Banco</hr>";
            self::$objetos++;
        }

        return self::$conexao;
    }    
}

$banco = new Banco();
$banco->conectar();

$banco2 = new Banco();
$banco2->conectar();

$banco3 = new Banco();
$banco3->conectar();

echo "Total Objetos: " . Banco::$objetos;

echo "<pre>";

var_dump($banco,$banco2,$banco3);

echo "<hr>";

$banco = BancoSingleton::getConexao();

$banco2 = BancoSingleton::getConexao();

$banco3 = BancoSingleton::getConexao();

//$banco4 = new BancoSingleton();


echo "Total Objetos: " . BancoSingleton::$objetos;

echo "<pre>";

var_dump($banco,$banco2,$banco3);




