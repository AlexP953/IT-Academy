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

echo 'Exercici 2'.PHP_EOL;

class Shape {
  function __construct(public int $width = 0, public int $height = 0) {}
}

$myShape = new Shape(89,98);

class Triangle extends Shape {

  public function area(): void
  {
      echo 0.5 * $this->width * $this->height.PHP_EOL;
  }
};

class Rectangle extends Shape {

  public function area(): void
  {
      echo $this->width * $this->height.PHP_EOL;
  }
};

$myTriangle = new Triangle( 9,6 );
$myTriangle->area();
$myRectangle = new Rectangle( 8 , 10);
$myRectangle->area();

// -----------------------------

echo PHP_EOL.'Nivell 2'.PHP_EOL;
echo 'Exercici 1'.PHP_EOL;

// Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
// Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.
// Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
// Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.
// A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.


// Aqui va include porque si no existe lo crea. Con Require provoca que pete
// IMPORTANTE: No sirve para archivos txt. Funciona pero provoca que printe el numero antes de nada. Comentado pero no borrado para recordarlo.
// include('counter.txt');

class DicesCounter {
  // Hace que externalCounter sea el archivo counter.txt
  private static $externalCounter = 'counter.txt';
  public static $throws = 0;

  public static function load() {
    // si counter.txt existe, pilla su informacion, si no, lo crea y setea en 0
    if (file_exists(self::$externalCounter)) {
        self::$throws = (int) file_get_contents(self::$externalCounter);
    } else {
        self::$throws = 0;
    }
}

  public static function addOneThrow() {
    // suma +1 al contador y lo añade la info al txt
    self::$throws +=1;
    file_put_contents(self::$externalCounter, self::$throws);
  }

  public static function showThrow() {
    return self::$throws;
  }
}



class PokerDice {
  public array $diceFaces = ['As','K','Q','J','7','8'];

  function __construct() {
    DicesCounter::load();
  }  
  
  public function throw():int {
    DicesCounter::addOneThrow();
    return mt_rand(0, count($this->diceFaces) - 1);
  }

  public function shapeName():string{
    return $this->diceFaces[$this->throw()];
  }

  public function throwFiveDices(){
    $fiveDices = [];
    for ($i=0; $i < 5; $i++) { 
    $fiveDices = $this->shapeName();
    print_r($fiveDices.', ');
    }
  }

  public function getTotalThrows(){
     return DicesCounter::showThrow();
  }
}

$dices = new PokerDice();
$dices->throwFiveDices();
echo PHP_EOL.'Numero total de tiradas: '.$dices->getTotalThrows();
