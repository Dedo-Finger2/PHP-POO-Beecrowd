<?php

namespace App\Classes\Desafios;
use App\Classes\BeecrowdBase;

class Desafio1001 extends BeecrowdBase {
    
    /**
     * sumValues
     * 
     * Sum all values stored
     * @return string
     */
    public static function sumValues() {
        return "X = " . array_sum(self::$values);
    }
}