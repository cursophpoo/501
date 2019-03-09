<?php 

abstract class Contas
{
    protected $titular;

    protected $saldo;

    //public static $atributoPrivate;
    private $atributoPrivate;

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    protected function metodoProtegido()
    {
        echo "<hr>Acessando em método protegido<hr>";
    }

}

class ContaPoupanca extends Contas
{
    private $aniversario = 6;

    private $nomeClasse = __CLASS__;

    public function rendimento()
    {
        if($this->aniversario = 6 ){
            echo "<hr>Aniversario da conta<hr>";
            echo "<hr>Nome da Classe: " . $this->nomeClasse."<hr>";
        }
    }

    public function aplicar($valor)
    {
        $this->rendimento();
        $this->metodoProtegido();
        $this->depositar($valor);

  //      echo "Atributo private da clase mãe: " . parent::$atributoPrivate . "<hr>";
    }

    public function resgatar($valor)
    {   
        $this->sacar($valor);
    }

    public function verSaldo()
    {
        return $this->saldo;
    }

}

$objPoupanca = new ContaPoupanca();
$objPoupanca->depositar(5000);
$objPoupanca->sacar(3000);

echo "Saldo Atual: " . $objPoupanca->verSaldo();
echo "<hr>";
$objPoupanca->aplicar(4000);
echo "Saldo Atual: " . $objPoupanca->verSaldo();
echo "<hr>";

//echo $objPoupanca->atributoPrivate;