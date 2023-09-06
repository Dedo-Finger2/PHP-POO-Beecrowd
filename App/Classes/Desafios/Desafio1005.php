<?php

namespace App\Classes\Desafios;
use App\Classes\BeecrowdBase;

class Desafio1005 extends BeecrowdBase
{
    private const NOTA_PESO1 = 3.5;
    private const NOTA_PESO2 = 7.5;

    public static function media1() {
        $primeiraNota = self::$values[0] * self::NOTA_PESO1;
        $segundaNota = self::$values[1] * self::NOTA_PESO2;

        return "MEDIA = " . round(($primeiraNota + $segundaNota) / (self::NOTA_PESO1 + self::NOTA_PESO2), 5);
    }
}
