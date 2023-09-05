<?php

namespace App\Classes\Desafios;
use App\Classes\BeecrowdBase;

class Desafio1002 extends BeecrowdBase
{
    private const PI = 3.14159;

    public static function getArea() {
        $result = round(self::PI * pow(self::$values[0],2), 4);
        
        return "A=$result";
    }
}
