<?php

    trait Validacao
    {
        public function validarCpfCnpj()
        {
            echo "<hr>Validando CPF/CNPJ...<hr>";
        }

        public function validarCartao($numeroCartao)
        {
            echo "<hr>Validando Cartão...<hr>";
        }

        public function validarDados($dados)
        {
            echo "<hr>Validando dados...Metodo do Trait Validação<hr>";
        }

        public abstract function metodoAbstrato($parametro);
    }

    trait Banco
    {
        public $nomeBanco = "contas";

        public function gravar($dados)
        {
            echo "<hr>Gravando dados no banco<hr>";
        }

        public function consultar($id)
        {
            echo "<hr>Buscando o registro<hr>";
        }

        public function validarDados($dados)
        {
            echo "<hr>Validando dados...Metodo do Trait Banco<hr>";
        }
    }

    trait TodasAsTraits
    {
        use Validacao, Banco {
            Banco::validarDados insteadOf Validacao;
        }

        public function metodoAbstrato($parametro)
        {
            echo "<hr>Metodo Implementado<hr>";
        }

    }

    class Vendas
    {
        use TodasAsTraits;

        public function finalizar($dados)
        {
            $this->validarCartao(111111111);
            $this->validarCpfCnpj(555555555);
            $this->validarDados('Dados');
            $this->gravar($dados);
        }

        public function getNomeBanco()
        {
            return $this->nomeBanco;
        }
    }

    $vendas = new Vendas();
    $vendas->finalizar('dados');

    echo "<hr>";
    echo "nome do Banco: {$vendas->getNomeBanco()}<hr>";
    $vendas->nomeBanco = "nuBank";
    echo "Nome do Banco Alterado: {$vendas->getNomeBanco()}<hr>";

    echo "<pre>";
    var_dump($vendas);