<?php 

abstract class Conta
//class Conta
{   
    public $saldo = 0;
    public $titular;

    /** 
     * Metodo para fazer um saque
     * @param float $valor
    */
    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    /** 
     * Metodo para fazer deposito
     * @param float $valor
    */
    public function depositar($valor)
    {
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


class contaPoupanca extends Conta
{}

class contaCorrente extends Conta
{}

$contaPoupanca = new ContaPoupanca();
$contaCorrente = new ContaCorrente();
// $conta = new Conta();


echo "<pre>";
var_dump($contaCorrente);
echo "<hr>";
var_dump($contaPoupanca);
// echo "<hr>";
// var_dump($conta);
// echo "<hr>";


