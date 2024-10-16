<?php
echo PHP_EOL.'Nivell 1'.PHP_EOL;
echo 'Exercici 1'.PHP_EOL;

class Employee
{
    public string $name = '';
    public int $salary = 0;

    function initialize(string $name, int $salary): void{
      $this->name = $name;
      $this->salary = $salary;
    }

    function prints():void {
      echo $this->name.PHP_EOL;
      echo ($this->salary > 6000) ? 'Ha de pagar impostos!'.PHP_EOL : 'No ha de pagar impostos'.PHP_EOL;
    }
}

$myEmployee = new Employee();

$myEmployee-> initialize('Eduardo',6001);
$myEmployee-> prints();