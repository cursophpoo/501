<?php

require 'autoload.php';


use Lib\Banco;
use Entities\{UsuariosEntity, ClientesEntity};
// use Entities\ClientesEntity;
use Model\{UsuariosModel, ClientesModel};
// use Model\ClientesEntity;


$banco = new Banco();
$entidadeUsuario = new UsuariosEntity();
$entidadeCliente = new ClientesEntity;

$usuarioModel = new UsuariosModel($banco, $entidadeUsuario);
$clienteModel = new ClientesModel($banco, $entidadeCliente);
