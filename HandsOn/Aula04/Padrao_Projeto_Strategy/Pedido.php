<?php
//Sem o padrão Strategy
class Pedido
{
    public $total;

    public $frete;

    public function calcularTotal($tipo)
    {
        switch($tipo){
            case 'PAC':
                $frete = 25;
                break;
            case 'SEDEX':
                $frete = 45;
                break;
            case 'SEDEX10':
                $frete = 65;
                break;
            default:
                return "Frete Invalido";       
        }

        return $this->total += $frete;
    }

    public function setTotal($total)
    {   
        $this->total = $total;
    }
}

$pedido = new Pedido();
$pedido->setTotal(150);
echo "Total Final: " . $pedido->calcularTotal('SEDEX');