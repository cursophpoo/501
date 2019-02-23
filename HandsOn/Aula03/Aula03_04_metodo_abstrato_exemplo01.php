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

    /** 
     *  Um metodo abstrato deve ser obrigatoriamente implementado na classe filha
     *  @param string $dados;
    */
    public abstract function gerarLog($dados);
}


class ContaPoupanca extends Conta
{
    public function gerarLog($dados)
    {
        echo "<hr> Gerando Log ...... Conta Poupanca <hr>";
    }
}

class ContaCorrente extends Conta
{
    public function gerarLog($dados)
    {
        echo "<hr> Gerando Log ...... Conta Corrente <hr>";
    }
}


$contaPoupanca = new ContaPoupanca();
$contaCorrente = new ContaCorrente();

echo "<pre>";
var_dump($contaCorrente);
echo "<hr>";
var_dump($contaPoupanca);
echo "<hr>";







