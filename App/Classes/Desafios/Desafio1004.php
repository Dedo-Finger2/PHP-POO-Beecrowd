<?php

namespace App\Classes\Desafios;
use App\Classes\BeecrowdBase;

class Desafio1004 extends BeecrowdBase
{
    public static function produtoSimples() {
        return !empty(self::$values) ? "PROD = " . self::$values[0] * self::$values[1] : "Valores vazios.";
    }
}
