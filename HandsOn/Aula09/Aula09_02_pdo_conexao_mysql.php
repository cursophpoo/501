<?php
/*
 *driver de conexão
 * host é o endereço do servidor
 * dbname é o nome do banco
*/

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = "developer";
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

//Definindo o modo de erro da classe PDO

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

var_dump($conexao);