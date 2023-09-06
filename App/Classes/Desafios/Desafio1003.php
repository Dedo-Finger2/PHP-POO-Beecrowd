<?php

namespace App\Classes\Desafios;
use App\Classes\BeecrowdBase;

class Desafio1003 extends BeecrowdBase
{
    public static function somaSimples() {
        $sumResult = 0;
        
        foreach (self::$values as $value) {
            $sumResult += $value;
        }

        return "SOMA = $sumResult";
    }
}
