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

class ContaCorrente extends Conta
{
    public function sacar($valor)
    {
        echo "<hr> Saque Efetuado <b>$valor</b><hr>";
        //O paraent faz referencia a classe Pai
        parent::sacar($valor);
    }
}


$conta = new Conta();
$conta->depositar(2500);
$conta->sacar(200);

echo "<hr>";
$contaCorrente = new ContaCorrente();
$contaCorrente->depositar(2500);
$contaCorrente->sacar(800);

echo "<hr>";
echo "Saldo em Conta : ". $conta->verSaldo();
echo "<hr>";
echo "Saldo em Conta Corrente: " . $contaCorrente->verSaldo();



