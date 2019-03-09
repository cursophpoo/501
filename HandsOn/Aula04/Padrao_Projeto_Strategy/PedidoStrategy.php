<?php 

require 'Fretes.php';

class Pedido
{
    public $total;

    public $frete;

    public function dadosFrete(FreteInterface $frete)
    {
        $dadosFrete = [
            'total' => $frete->getValorFrete(),
            'prazo' => $frete->getPrazo()
        ];

        return $dadosFrete;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }
    
}


$frete = new FreteSedex();
$frete->buscar('Dados teste');

$pedido = new Pedido();

$pedido->setTotal(150);
$dadosFrete = $pedido->dadosFrete($frete);

echo "Valor Frete: " . $dadosFrete['total'];
echo "<br>Prazo : " . $dadosFrete['prazo'];


