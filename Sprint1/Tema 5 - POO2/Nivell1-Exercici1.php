<?php
echo PHP_EOL.'Nivell 1'.PHP_EOL;
echo 'Exercici 1'.PHP_EOL;

// Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).

interface AnimalInterface {
  public function makeSound():void ;
}

abstract class Animal {
  public $name;

  public function __construct(string $name){
    $this->name = $name;
  }
}

class gos extends Animal implements AnimalInterface{

  public function makeSound():void{
    echo 'guau guau'.PHP_EOL;
  }

}

class gat extends Animal implements AnimalInterface{

  public function makeSound():void{
    echo 'miau miau'.PHP_EOL;
  }

}

$pepeTheDog = new gos('pepe');
$pepeTheDog->makeSound();
$CATelyn = new gat('CATelyn');
$CATelyn->makeSound();

?>