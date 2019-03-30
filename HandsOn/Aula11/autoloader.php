<?php

spl_autoload_register(function($classe){
        $classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
        $classe = "$classe.php";

        if(!file_exists($classe)){
           throw new Exception("Arquivo [$classe] não encontrado.");         
        } 

        require $classe;
});