<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = "developer";
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM usuarios WHERE id = 1";

$retorno = $conexao->query($query);

$registro = $retorno->fetch(PDO::FETCH_OBJ);
     
echo "Id: " . $registro->id;
echo "<br>Nome: " . $registro->nome;
echo "<br>Email: " . $registro->email;
echo "<br>Senha: " . $registro->senha;
echo "<hr>"; 

echo "<pre>";

var_dump($registro);

print_r($registro);

