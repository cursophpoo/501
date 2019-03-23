<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = "developer";
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = "INSERT INTO usuarios(nome, email, senha)
            VALUES(:nome, :email, :senha)";

$nome = 'Alfredo Dantas';
$email = 'dantas_afredo@danfredo.com.br';
$senha = 'A1fR3d0d@nT45';

$retorno = $conexao->prepare($insert);

$retorno->bindParam(':nome', $nome, PDO::PARAM_STR, 60);
$retorno->bindParam(':email', $email, PDO::PARAM_STR, 100);
$retorno->bindParam(':senha', $senha, PDO::PARAM_STR, 100);

echo "<hr><pre>";

var_dump($retorno->execute());