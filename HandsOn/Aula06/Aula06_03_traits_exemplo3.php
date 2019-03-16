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
    }

    class Vendas
    {
        use Validacao, Banco;

        public function finalizar($dados)
        {
            $this->validarCartao(111111111);
            $this->validarCpfCnpj(555555555);
            $this->gravar($dados);
        }
    }


    $vendas = new Vendas();
    $vendas->finalizar('dados');