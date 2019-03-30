<?php 
namespace Controller;

use Lib\View\ViewModel;

class FrontController
{
    public function run()
    {
        $rota = explode('/', $_GET['rota']);

        $controller = ucfirst($rota[0]);

        $pathView = $controller;

        $controller = (isset(rota[0])) ? "Controller\\{$controller}Controller" : "Index";

        $action = $rota[1] ?? "index";

        $pathView .= "/action";

        $id = $rota[2] ?? null;

        $controller = new $controller();

        if(!method_exists($controller. $action)){
            echo "Rota invalida";
            return;
        }

        $dados = $controller->$action($id);

        ViewModel::render($pathView, $dados);
    }
}