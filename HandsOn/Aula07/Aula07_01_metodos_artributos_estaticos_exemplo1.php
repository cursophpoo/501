<?php 

class Usuarios
{
    public $nome;
    public $email;

    public static $listaUsuarios = [];

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function salvarUsuario(Usuarios $usuarios)
    {
        self::$listaUsuarios[] = $usuarios;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function listarUsuario()
    {
        return self::$listaUsuarios;
    }

}

$usuario1 = new Usuarios();
Usuarios::salvarUsuario($usuario1);

$usuario1->setNome('Luana de Oliveira');
$usuario1->setEmail('lu.oliveira@gmail.com');

$usuario2 =  new Usuarios();
Usuarios::salvarUsuario($usuario2);

$usuario2->setNome("Larissa Costa Lima");
$usuario2->setEmail("lari.costa@gmail.com");


echo "Total de Usuarios: ". count(Usuarios::$listaUsuarios);
echo "<br>";
echo "Total de Usuarios Objeto1: " . count($usuario1->listarUsuario());
echo "<br>";
echo "Total de Usuarios Obejto2: " . count($usuario2->listarUsuario());
echo "<hr>";

foreach(Usuarios::listarUsuario() as $usuario){
    echo "Nome: " . $usuario->getNome() . "<br>";
    echo "Email: " . $usuario->getEmail() . "<br>"; 
}
