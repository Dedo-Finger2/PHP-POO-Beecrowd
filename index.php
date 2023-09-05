<?php
use App\Classes\Desafios\Desafio1001;
use App\Classes\BeecrowdBase;
use App\Classes\Desafios\Desafio1002;

include __DIR__."/vendor/autoload.php";


// Desafio 1001 ---------------------------------------------------------------------------
echo BeecrowdBase::getQuestionText(1001);

Desafio1001::setValues([10,9]);

echo Desafio1001::sumValues();
echo BeecrowdBase::checkResult("X = 19", Desafio1001::sumValues());

// Desafio 1002 ---------------------------------------------------------------------------
echo BeecrowdBase::getQuestionText(1002);

Desafio1002::setValues([2.0]);
echo Desafio1002::getArea();

echo BeecrowdBase::checkResult("A=12.5664", Desafio1002::getArea());