<?php

namespace Entidades;

class Cliente extends Pessoa
{
    public $rg;
    public $cpf;
    public $email;

    public function salvar()
    {
        echo "<hr>Salvando Cliente<hr>";
    }


}