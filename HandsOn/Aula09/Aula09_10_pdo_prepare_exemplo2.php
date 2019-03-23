<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = "developer";
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = "INSERT INTO usuarios(nome, email, senha)
            VALUES(?,?,?)";


$retorno = $conexao->prepare($insert);

for ($x = 0; $x <= 3; $x++){
    var_dump($retorno->execute([
        "Maria Souza Lima - $x",
        "mari.lima_$x@gmail.com",
        "123456"
    ]));
}