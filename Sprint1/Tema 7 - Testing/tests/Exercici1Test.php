<?php

require './src/Exercici1.php';

use PHPUnit\Framework\TestCase;
use checker\NumberChecker;

class Exercici1Test extends TestCase
{
    public function testIsEven():void
    {
        $checker = new NumberChecker(2);
        $result = $checker->isEven();
        
        $this->assertEquals(true, $result);
    }

    public function testIsPositive():void
    {
        $checker = new NumberChecker(45);
        $result = $checker->isPositive();
        
        $this->assertEquals(true, $result);
    }
}
