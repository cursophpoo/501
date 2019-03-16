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
    }

    trait Banco
    {
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

    class Vendas
    {
        use Validacao, Banco {
            //Banco::validarDados as BValidarDados;
            //Validacao::validarDados as VValidarDados;
            Banco::validarDados insteadOf Validacao;
        }

        public function finalizar($dados)
        {
            $this->validarCartao(111111111);
            $this->validarCpfCnpj(555555555);
            // $this->BValidarDados('Dados');
            // $this->VValidarDados('Dados');
            $this->validarDados('Dados');
            $this->gravar($dados);
        }
    }


    $vendas = new Vendas();
    $vendas->finalizar('dados');