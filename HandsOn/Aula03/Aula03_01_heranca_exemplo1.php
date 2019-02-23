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

class ContaPoupanca extends Conta
{
    public $aniversario = 6;

    public function aplicar($valor)
    {
        echo "<hr> Aplicação efetuada <b>$valor</b><hr>";
        $this->depositar($valor);
    }
}


class ContaPoupancaConjunta extends ContaPoupanca
{}

$conta = new Conta();
$conta->depositar(1200);

$contaPoupanca = new ContaPoupanca();
$contaPoupanca->depositar(2000);


$contaPoupancaConjunta = new ContaPoupancaConjunta(); 
$contaPoupancaConjunta->aplicar(100);

echo "<pre>";
var_dump($conta);
var_dump($contaPoupanca);
echo "<hr>";
var_dump($contaPoupancaConjunta);
echo "<hr>";
echo "Saldo Conta Conjunta: ". $contaPoupancaConjunta->verSaldo();