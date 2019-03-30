<?php

namespace Fabricas;

class Fabrica
{
    public static function criar($classe)
    {
        if(!class_exists($classe)){
            throw new Exception("Classe [$classe] não encontrada");
        }

        return new $classe;
    }
}