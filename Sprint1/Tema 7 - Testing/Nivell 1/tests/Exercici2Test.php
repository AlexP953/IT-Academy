<?php

require './src/Exercici2.php';

use PHPUnit\Framework\TestCase;
use function studentGradeChecker\StudentGrade;

class Exercici2Test extends TestCase
{
    public function testFirstDivision():void
    {
        $result = StudentGrade(60);
        
        $this->assertEquals('Primera divisió', $result);
    }

    public function testSecondDivision():void
    {
        $result = StudentGrade(47);
        
        $this->assertEquals('Segona divisió', $result);
    }

    public function testThirdDivision():void
    {
        $result = StudentGrade(35);
        
        $this->assertEquals('Tercera divisió', $result);
    }

    public function testFail():void
    {
        $result = StudentGrade(23);
        
        $this->assertEquals('Suspès', $result);
    }

}
