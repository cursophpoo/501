<?php

$dsn = 'pgsql:host=localhost;dbname=aula_pdo';
$user = "pdo";
$pass = '123456';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = "INSERT INTO usuarios(nome, email, senha)
            VALUES('Luciana Lima Soyuza', 'lu.souza@gmail.com', '123456')";

//$update  = "UPDATE usuarios SET senha = '456123'";

$retorno = $conexao->exec($insert);
//$retorno = $conexao->exec($update);

var_dump($retorno);