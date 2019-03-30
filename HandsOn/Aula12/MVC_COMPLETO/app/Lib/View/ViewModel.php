<?php

namespace Lib\View;

class ViewModel
{
    public static function render($path, $dados = null)
    {
        require '../app/View/Layout/layout.php';
    }
}