<?php

class Cartera {
  public function getCartera() {
      return "Cartera en bolsillo!";
  }
}
 
class Llaves {
  public function getLlaves() {
      return "Llaves cogidas!";
  }
}
 
class T10 {
  public function getTarjeta() {
      return "Tarjeta en bolsillo!";
  }
}
 
class Smartphone {
  public function getSmartphone() {
      return "Smartphone en bolsillo!";
  }
}
 
class Persona {
  
  private $cartera;
  private $llaves;
  private $t10;
  private $smartphone;

  public function __construct(Cartera $cartera, Llaves $llaves, T10 $t10, Smartphone $smartphone){
    $this->cartera = $cartera;
    $this->llaves = $llaves;
    $this->t10 = $t10;
    $this->smartphone = $smartphone;
  }

  public function salirDeCasa() {
    echo $this->cartera->getCartera() . PHP_EOL;
    echo $this->llaves->getLlaves() . PHP_EOL;
    echo $this->t10->getTarjeta() . PHP_EOL;
    echo $this->smartphone->getSmartphone() . PHP_EOL;
  }
}

$cartera = new Cartera();
$llaves = new Llaves();
$t10 = new T10();
$smartphone = new Smartphone();
$persona = new Persona($cartera, $llaves, $t10, $smartphone);

$persona->salirDeCasa();

?>