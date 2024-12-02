<?php

class Rentaplats {
  
  public function getDish(){
    echo 'Tinc tots els plats'.PHP_EOL;
  }

  public function setSoap(){
    echo 'Ensabono tots els plats'.PHP_EOL;
  }

  public function clarify(){
    echo 'Aclaro tots els plats'.PHP_EOL;
  }

  public function setDry(){
    echo 'asseco tots els plats'.PHP_EOL;
  }

}

class RentaplatsFacade {
  protected $rentaplats;

  public function __construct(Rentaplats $rentaplats)
  {
      $this->rentaplats = $rentaplats;
  }

  public function setSoap(){
    echo 'Afegeixo gel rentador'.PHP_EOL;
  }

  public function turnOn()
  {
      $this->rentaplats->getDish();
      $this->rentaplats->setSoap();
      $this->rentaplats->clarify();
      $this->rentaplats->setDry();
      for ($i=0; $i < 3; $i++) { 
        sleep(1);
        echo ' . ';
      }
      $this->turnOff();
  }

  public function turnOff()
  {
    echo PHP_EOL.'Automatització acabada';
  }
}

$rentaplats = new Rentaplats();
$neteja = new RentaplatsFacade($rentaplats);
$neteja->setSoap();
$neteja->turnOn();