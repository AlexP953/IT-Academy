<?php

require './src/Exercici2.php';

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use function studentGradeChecker\StudentGrade;

class Exercici2Test extends TestCase
{
    #[DataProvider('gradesProvider')]
    public function testDivision($grade, $expectedResult):void
    {
        $result = StudentGrade($grade);
        
        $this->assertEquals($expectedResult, $result);
    }

    public static function gradesProvider(){
        return [
            [0, 'Suspès'],
            [20, 'Suspès'],
            [-20, 'Suspès'],
            
            [32, 'Suspès'],
            [33,'Tercera divisió'],
            
            [44, 'Tercera divisió'],
            [45,'Segona divisió'],
            [46, 'Segona divisió'],
            
            [59, 'Segona divisió'],
            [60, 'Primera divisió'],
            [61, 'Primera divisió'],
        ];
    }

}
