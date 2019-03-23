<?php

$dsn = 'mysql:host=localhost;dbname=aula_pdo';
$user = "developer";
$pass = '4linux';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = "UPDATE usuarios
            SET nome = ?, senha = ? WHERE id = ?
            ";


$retorno = $conexao->prepare($insert);

var_dump($retorno->execute([
    "Update com prepare",
    "123789",
    "1"
]));

echo "<hr><pre>";

//$select = "SELECT * FROM usuarios WHERE nome LIKE ?";
$select = "SELECT * FROM usuarios WHERE id > ?";

$pdoSt = $conexao->prepare($select);

// $pdoSt->execute([
//     'Maria%'
// ]);

$pdoSt->execute([
    20
]);

$registro = $pdoSt->fetchAll(PDO::FETCH_ASSOC);

print_r($registro);