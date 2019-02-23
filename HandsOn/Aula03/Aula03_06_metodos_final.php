<?php 

class Log
{
    public final function escrever($dados)
    {
        echo "<hr> Gerando Log ...... <br><br> $dados <br><hr>";
    }
}

class LogAlterado extends Log
{
    // public function escrever($dados)
    // {
    //     echo "<hr> Gerando Log ...... <hr>";
    // }
}

$log = new LogAlterado;
$log->escrever('Teste');