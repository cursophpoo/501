<?php

class Notas
{
    protected $bimestre1;
    protected $bimestre2;
    protected $bimestre3;
    protected $bimestre4;
    protected $media;   

    const MEDIA_DEFINIDA = 7;

    const STATUS_APROVADO = 1;
    const STATUS_REPROVADO = 2;
    const STATUS_RECUPERACAO = 3;

    public function getMedia()
    {
        //return self::MEDIA_DEFINIDA;
        return static::MEDIA_DEFINIDA;
    }

}

echo Notas::getMedia() . "<hr>";

$media = 10;

if($media >= Notas::MEDIA_DEFINIDA){
    echo "Passou";
} else {
    echo "Não passou";
}
