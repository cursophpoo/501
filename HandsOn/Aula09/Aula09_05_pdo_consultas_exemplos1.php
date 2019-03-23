<?php

$dsn = 'pgsql:host=localhost;dbname=aula_pdo';
$user = "pdo";
$pass = '123456';

$conexao = new PDO($dsn, $user, $pass);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM usuarios";

$retorno = $conexao->query($query);

class Usuario 
{
    public $id;
    public $nome;
    public $email;
    public $senha;

}

$registros = $retorno->fetchAll(PDO::FETCH_CLASS, "Usuario");
//$registros = $retorno->fetchAll(PDO::FETCH_ASSOC);

/*$retorno->setFetchMode(PDO::FETCH_CLASS, "Usuario");
while($registros = $retorno->fetch(PDO::FETCH_CLASS)){
    echo "Id: " . $registros->id;
    echo "<br>Nome: " . $registros->nome;
    echo "<br>Email: " . $registros->email;
    echo "<br>Senha: " . $registros->senha;
    echo "<hr>"; 
}*/



/*foreach($registros as $registro){
       echo "Id: " . $registro['id'];
       echo "<br>Nome: " . $registro['nome'];
       echo "<br>Email: " . $registro['email'];
       echo "<br>Senha: " . $registro['senha'];
       echo "<hr>"; 
}
*/

echo "<pre>";

var_dump($registros);


print_r($registros);

