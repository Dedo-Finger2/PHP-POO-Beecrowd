<?php

namespace App\Classes;

class BeecrowdBase
{
    protected static $values = [];
    protected static $questions = [
        1001 => "Leia 2 valores inteiros e armazene-os nas variáveis A e B. Efetue a soma de A e B atribuindo o seu resultado na variável X. Imprima X conforme exemplo apresentado abaixo. Não apresente mensagem alguma além daquilo que está sendo especificado e não esqueça de imprimir o fim de linha após o resultado, caso contrário, você receberá Presentation Error. 
        {{Entrada}}
        A entrada contém 2 valores inteiros.
        {{Saída}}
        Imprima a mensagem 'X = ' (letra X maiúscula) seguido pelo valor da variável X e pelo final de linha. Cuide para que tenha um espaço antes e depois do sinal de igualdade, conforme o exemplo abaixo.",
        1002 => "A fórmula para calcular a área de uma circunferência é: area = π . raio2. Considerando para este problema que π = 3.14159:

        - Efetue o cálculo da área, elevando o valor de raio ao quadrado e multiplicando por π.
        
        {{Entrada}}
        A entrada contém um valor de ponto flutuante (dupla precisão), no caso, a variável raio.
        
        {{Saída}}
        Apresentar a mensagem 'A=' seguido pelo valor da variável area, conforme exemplo abaixo, com 4 casas após o ponto decimal. Utilize variáveis de dupla precisão (double). Como todos os problemas, não esqueça de imprimir o fim de linha após o resultado, caso contrário, você receberá 'Presentation Error'."
    ];

    /**
     * insertValues
     * Store values to process them later on
     * @param array $values Values that will be stored
     * @return void
     */
    public static function setValues(array $values): void
    {
        foreach ($values as $value) {
            array_push(self::$values, $value);
        }
    }

    /**
     * getValues
     * @return mixed values - Valores
     */
    public static function getValues()
    {
        return self::$values != null ? self::$values : false;
    }

    /**
     * checkResult
     * @param mixed $trueOutput Output that is correct
     * @param mixed $yourOutput The output you got
     * @return bool
     */
    public static function checkResult($trueOutput, $yourOutput): string
    {
        if ($trueOutput == null || $yourOutput == null || $yourOutput != $trueOutput) {
            return "<br><p>❌ something went wrong!";
        }

        return "<br><p>✅ Test passed!</p>";
    }
        
    /**
     * getQuestionText
     *
     * @param int $index - Question number
     * @return string - Question's text
     */
    public static function getQuestionText(int $index)
    {
        self::$questions[$index] = str_replace("{{Entrada}}", "<h2>Entrada</h2>", self::$questions[$index]);
        self::$questions[$index] = str_replace("{{Saída}}", "<h2>Saída</h2>", self::$questions[$index]);

        self::$values = [];

        return "<hr> <h1>Desafio ". $index ." </h1>" . self::$questions[$index] . "<hr>";
    }
}