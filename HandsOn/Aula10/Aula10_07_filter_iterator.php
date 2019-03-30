<?php

class FiltroNumeros extends FilterIterator
{
    public function accept()
    {
        $valor = $this->getInnerIterator()->current();
        return !($valor % 2);
    }

}


$objArray = new ArrayIterator([1,2,3,4,5,6,7]);

$numeros = new FiltroNumeros($objArray);

foreach($numeros as $numero){
    echo "$numero<br>";
}