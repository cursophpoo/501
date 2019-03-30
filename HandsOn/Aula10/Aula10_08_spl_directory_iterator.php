<?php

echo "<h1>DirectoryIterator</h1>";

$diretorio = new DirectoryIterator('/var/www/html/501/HandsOn/Aula10');

foreach ($diretorio as $value){
    echo $value->getFilename();
    echo "<br>" . $value->getSize();
    echo "<br>" . $value->getExtension();
    echo "<hr>";
}


//Glob Iterator, permite fazer uso de um filtro

echo "<h1>GlobIterator</h1>";


$glob = new GlobIterator('/var/www/html/501/HandsOn/Aula10/*seek*.php');

foreach ($glob as $value){
    echo $value->getFilename();
    echo "<br>" . $value->getSize();
    echo "<br>" . $value->getExtension();
    echo "<hr>";
}
