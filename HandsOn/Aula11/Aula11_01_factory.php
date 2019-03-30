<?php

require 'autoloader.php';

use Fabricas\Fabrica;

try{    
    echo "<pre>";

    $cliente = Fabrica::criar('Entidades\Cliente');
    print_r($cliente);
    $cliente->salvar();

    echo "<hr>";

    $funcionario = Fabrica::criar("Entidades\Funcionario");
    print_r($funcionario);
    $funcionario->salvar();

} catch (Exepction $e){
    echo $e->getMessage();
}