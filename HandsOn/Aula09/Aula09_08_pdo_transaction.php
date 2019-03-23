<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = "developer";
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = "INSERT INTO usuarios(nome, email, senha)
            VALUES('Maria de Lima', 'lu.souza@gmail.com', '123456')";



$conexao->beginTransaction();

try {

    for($x =0; $x <= 10; $x++){
        $conexao->exec($insert);
    }

    $conexao->commit();
}  catch (PDOException $e) {
    
    $conexao->rollBack();
    echo "Erro: {$e->getMessage()}";
}