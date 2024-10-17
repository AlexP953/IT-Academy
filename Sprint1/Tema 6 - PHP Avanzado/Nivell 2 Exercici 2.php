<?php
// Implementa una classe Car que tingui informació sobre un cotxe (marca, matrícula, tipus de combustible, velocitat màxima). A més, implementa un Trait anomenat Turbo que tingui un mètode boost() que mostri un missatge “S’ha iniciat el turbo”. Usa aquest mètode des de la classe Car.

enum Fuel {
  case E95;
  case E98;
  case Diesel;
  case GLP;
  case Electrical;
}

trait Turbo {
  public function boost() {
      echo "S’ha iniciat el turbo";
  }
}

class Car{
  use Turbo;
  
  public $brand;
  public $plate;
  public $fuel;
  public $MaxSpeed;

  public function __construct(string $brand, string $plate, Fuel $fuel, int $MaxSpeed ) {
    $this->brand = $brand;
    $this->plate = $plate;
    $this->fuel = $fuel;
    $this->MaxSpeed = $MaxSpeed;
  }

}

$nissan = new Car('Nissan', '2940BKD', Fuel::E95, 120);

print_r($nissan);
$nissan->boost();
?>