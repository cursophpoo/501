<?php

namespace Model;

use Lib\Banco;
use Entities\ClientesEntity;

class ClientesModel
{
    private $banco;
    private $cliente;

    public function __construct(Banco $banco, ClientesEntity $cliente)
    {
        echo "<hr>Classe Clientes Model<hr>";
        $this->banco = $banco;
        $this->cliente = $cliente;
    }

}