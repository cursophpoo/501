<?php

class Conta
{
    private $saldo = 0;

    /** 
     * depositar
     * Faz deposito de valor na conta
     * @param float $valor
    */

    private function depositar($valor)
    {
        $this->saldo += $valor;
    }

    private function sacar($valor)
    {
        $this->saldo -= $valor;
    }
}


echo "<h1>Reflection Conta</h1>";

$reflection = new ReflectionClass('Conta');

echo "<pre>";
print_r($reflection->getMethods());
echo "<hr>";
print_r($reflection->getProperties());
echo "<hr>";


echo "<h1>Reflection</h1>";

$reflectionPDO = new ReflectionClass('PDO');

echo "<pre>";
print_r($reflectionPDO->getMethods());
echo "<hr>";
print_r($reflectionPDO->getProperties());
echo "<hr>";




