<?php
use App\Classes\Desafios;
use App\Classes\BeecrowdBase;


include __DIR__."/vendor/autoload.php";


// Desafio 1001 ---------------------------------------------------------------------------
echo BeecrowdBase::getQuestionText(1001);

Desafios\Desafio1001::setValues([10,9]);

echo Desafios\Desafio1001::sumValues();
echo BeecrowdBase::checkResult("X = 19", Desafios\Desafio1001::sumValues());

// Desafio 1002 ---------------------------------------------------------------------------
echo BeecrowdBase::getQuestionText(1002);

Desafios\Desafio1002::setValues([2.0]);
echo Desafios\Desafio1002::getArea();

echo BeecrowdBase::checkResult("A=12.5664", Desafios\Desafio1002::getArea());

// Desafio 1003 ---------------------------------------------------------------------------
echo BeecrowdBase::getQuestionText(1003);

BeecrowdBase::setValues([30, 10]);
echo Desafios\Desafio1003::somaSimples();
echo BeecrowdBase::checkResult("SOMA = 40", Desafios\Desafio1003::somaSimples());

// Desafio 1004 ---------------------------------------------------------------------------
echo BeecrowdBase::getQuestionText(1004);

BeecrowdBase::setValues([3, 9]);
echo Desafios\Desafio1004::produtoSimples();
echo BeecrowdBase::checkResult("PROD = 27", Desafios\Desafio1004::produtoSimples());

// Desafio 1005 ---------------------------------------------------------------------------
echo BeecrowdBase::getQuestionText(1005);

BeecrowdBase::setValues([5.0, 7.1]);
echo Desafios\Desafio1005::media1();
echo BeecrowdBase::checkResult("MEDIA = 6.43182", Desafios\Desafio1005::media1());
