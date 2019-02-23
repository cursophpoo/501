<?php 

abstract class Conta
{   
    public $saldo = 0;
    public $titular;

    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;

    }

    public function verSaldo() :float
    {
        return $this->saldo;
    }

    public abstract function gerarLog($dados);
}


final class ContaPoupanca extends Conta
{
    public function gerarLog($dados)
    {
        echo "<hr> Gerando Log ...... Conta Poupanca <hr> $dados ";
    }
}

final class ContaCorrente extends Conta
// class ContaCorrente extebds Conta
{
    public function gerarLog($dados)
    {
        echo "<hr> Gerando Log ...... Conta Corrente <hr> $dados ";
    }
}


//class ContaConjunta extends ContaCorrente
class ContaConjunta extends Conta
{
    public function gerarLog($dados)
    {
        echo "<hr> Gerando Log ...... Conta Conjunta <hr> $dados ";
    }   
}

class ContaNova extends Conta
{
    public function gerarLog($dados)
    {
        echo "<hr> Gerando Log ...... Conta Nova <hr> $dados ";
    }   
}




$contaPoupanca = new ContaPoupanca();
$contaCorrente = new ContaCorrente();


$contaPoupanca->gerarLog("Deu Erro");
$contaCorrente->gerarLog("Deu Erro");


echo "<pre>";
var_dump($contaCorrente);
echo "<hr>";
var_dump($contaPoupanca);
echo "<hr>";







