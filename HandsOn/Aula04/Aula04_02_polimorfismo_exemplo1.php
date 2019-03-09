<?php 

interface ContasInterface
{
    public function sacar(float $valor);
    public function depositar(float $valor);
    public function verSaldo() : float;
}

class ContaCorrente implements ContasInterface
{
    public $saldo = 0;

    public function sacar (float $valor)
    {
        $this->saldo -= $valor;
    }

    public function depositar (float $valor)
    {
        $this->saldo += $valor;
    }

    public function verSaldo() : float 
    {
        return $this->saldo;
    }

}

class ContaPoupanca implements ContasInterface
{
    public $saldo = 0;

    public function sacar(float $valor)
    {
        echo "<hr> Saque Efetuado: $valor <hr>";
        $this->saldo -= $valor;
    }

    public function depositar(float $valor)
    {
        echo "<hr> Deposito Efetuado: $valor <hr>";
        $this->saldo += $valor;
    }

    public function verSaldo() : float
    {
        return $this->saldo;
    }

}

class ContaSemInterface{

}

class Aplicacao
{
    public function aplicar(ContasInterface $conta)
    {
        echo "Ver Saldo: " . $conta->verSaldo();
    }
}

$contaCorrente = new ContaCorrente();
$contaCorrente->depositar(500);

$contaPoupanca = new ContaPoupanca();
$contaPoupanca->depositar(800);
$contaSemInterface = new ContaSemInterface();

$aplicacao = new Aplicacao();
$aplicacao->aplicar($contaPoupanca);

//$aplicacao->aplicar($contaSemInterface);


echo "<hr>";

echo "É uma intancia de ContaSemInterface: <br>";
var_dump($contaPoupanca instanceof ContaSemInterface);
echo "<br>";

echo "É uma intancia de ContaPoupanca: <br>";
var_dump($contaPoupanca instanceof ContaPoupanca);
echo "<br>";


echo "É uma intancia de ContasInterface: <br>";
var_dump($contaPoupanca instanceof ContasInterface);
echo "<br>";

echo "<hr>";

echo "É uma intancia de ContaSemInterface: <br>";
var_dump($contaCorrente instanceof ContaSemInterface);
echo "<br>";

echo "É uma intancia de ContaCorrente: <br>";
var_dump($contaCorrente instanceof ContaCorrente);
echo "<br>";

echo "É uma intancia de ContasInterface: <br>";
var_dump($contaCorrente instanceof ContasInterface);
echo "<br>";




