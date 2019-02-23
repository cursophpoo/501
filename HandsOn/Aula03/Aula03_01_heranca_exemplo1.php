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
