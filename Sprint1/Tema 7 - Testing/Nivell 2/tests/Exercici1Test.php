<?php

require './src/Exercici1.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use checker\NumberChecker;

class Exercici1Test extends TestCase
{
    #[DataProvider('evenNumberProvider')]
    public function testIsEven($number, $expectedIsEven):void
    {          
        $checker = new NumberChecker($number);
        $result = $checker->isEven();
        
        $this->assertEquals($expectedIsEven, $result);
    }

    // Para vincular el test con el metodo que utilizaremos como DataProvider
    #[DataProvider('positiveNumberProvider')]
    public function testIsPositive($number, $expectedIsPositive):void
    {
        $checker = new NumberChecker($number);
        $result = $checker->isPositive();
        
        $this->assertEquals($expectedIsPositive, $result);
    }


    public static function evenNumberProvider()
    {
        // Creamos una funcion que devuelva un array de arrays donde, de cada sub array devolvera el parametro que queremos testear como primer elemento y el parametro que deberiamos recibir para que el test de OK como segundo elemento
        return [
            [1, false],
            [2, true],
            [3, false],
            [4, true],
            [5, false],
            [6, true],
            [-1, false],
            [-2, true],
            [0, true],  // El 0 es par
        ];
    }

    public static function positiveNumberProvider()
    {
        return [
            [1, true],
            [2, true],
            [3, true],
            [-1, false],
            [-2, false],
            [0, false],  // El 0 NO es positivo
        ];
    }

}
