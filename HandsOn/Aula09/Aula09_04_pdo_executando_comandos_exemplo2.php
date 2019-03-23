<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = "developer";
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = "INSERT INTO usuarios(nome, email, senha)
            VALUES('Maria de Lima', 'lu.souza@gmail.com', '123456')";

//$update  = "UPDATE usuarios SET senha = '456123'";

$retorno = $conexao->exec($insert);
//$retorno = $conexao->exec($update);

var_dump($retorno);