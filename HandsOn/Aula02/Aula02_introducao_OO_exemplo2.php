<?php 

class Conta
{   
    public $saldo = 0;
    public $titular;

    /** 
     * Metodo para fazer um saque
     * @param float $valor
    */
    public function sacar($valor)
    {
        echo "<hr> Saque Efetuado Valor: <b> $valor </b><hr>";
        $this->saldo -= $valor;
    }

    /** 
     * Metodo para fazer deposito
     * @param float $valor
    */
    public function depositar($valor)
    {
        echo "<hr> Deposito Efetuado Valor: <b> $valor </b><hr>";
        $this->saldo += $valor;

    }

    /**
     * Retorna o saldo atual
     * @return float $saldo
     */
    public function verSaldo() :float
    {
        return $this->saldo;
    }
}

$conta1 = new Conta();
$conta2 = new Conta();


$conta1->titular = "Luciana de Souza Lima";
$conta2->titular = "Aline de Oliveira";

$conta1->depositar(500);
$conta2->depositar(100);

echo "<pre>";
var_dump($conta1);
echo "<hr>";
var_dump($conta2);

echo "<hr>";
echo "Saldo Atual em Conta1: ". $conta1->verSaldo();
echo "<hr>";
echo "Saldo Atual em Conta2: ". $conta2->verSaldo();

echo "<hr>";
$conta1->sacar(400);
$conta2->sacar(600);
echo "<hr>";

echo "<hr>";
echo "Saldo Atual em Conta1: ". $conta1->verSaldo();
echo "<hr>";
echo "Saldo Atual em Conta2: ". $conta2->verSaldo();


echo "<hr>";
echo "Titular da Conta1: ". $conta1->titular;
echo "<hr>";
echo "Titular da Conta2: ". $conta2->titular;
