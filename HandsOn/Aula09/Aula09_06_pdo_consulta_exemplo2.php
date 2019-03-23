<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = "developer";
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM usuarios";

$retorno = $conexao->query($query);

$registros = $retorno->fetchAll(PDO::FETCH_OBJ);

foreach($registros as $registro){
       echo "Id: " . $registro->id;
       echo "<br>Nome: " . $registro->nome;
       echo "<br>Email: " . $registro->email;
       echo "<br>Senha: " . $registro->senha;
       echo "<hr>"; 
}

echo "<pre>";

var_dump($registros);


print_r($registros);

