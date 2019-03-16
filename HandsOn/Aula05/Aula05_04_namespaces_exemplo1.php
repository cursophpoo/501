<?php

namespace Bradesco;

class Contas
{
    protected $saldo = 500;
    protected $banco = 'Bradesco';
    
    public function getSaldo()
    {
        return $this->saldo;
    }
    
    public function getBanco()
    {
        return $this->banco;
    }
}

namespace Itau;

class Contas
{
    protected $saldo = 500;
    protected $banco = 'Itau';
    
    public function getSaldo()
    {
        return $this->saldo;
    }
    
    public function getBanco()
    {
        return $this->banco;
    }  
}


$contaBradesco = new \Bradesco\Contas();
echo 'Nome do Banco: ' . $contaBradesco->getBanco();

echo '<hr>';

$contaItau = new \Itau\Contas();
echo 'Nome do Banco: ' . $contaItau->getBanco();