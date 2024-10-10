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

echo PHP_EOL.'Nivell 2'.PHP_EOL;
echo 'Exercici 1'.PHP_EOL;

// Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

interface geometricShape {
  public function area():float|string;
}

abstract class Shape {
  public $width;
  public $height;

  public function __construct(float $width, float $height){
    $this->width = $width;
    $this->height = $height;
  }
}

class Triangle extends Shape implements geometricShape{

  public function area():float|string{
    return 0.5 * $this->width * $this->height;
  }

}

class Rectangle extends Shape implements geometricShape{

  public function area():float|string{
    return $this->width * $this->height;
  }

}

$myTriangle = new Triangle( 9,6 );
echo $myTriangle->area().PHP_EOL;
$myRectangle = new Rectangle( 9,6 );
echo $myRectangle->area().PHP_EOL;

echo PHP_EOL.'Nivell 3'.PHP_EOL;
echo 'Exercici 1'.PHP_EOL;

class Circle extends Shape implements geometricShape{
  public function area():float|string{

    if ( $this->width !== $this->height){
      return 'NO es un circulo';
    } else {
      return 3.14 * (($this->width / 2) ** 2);
    }
  }
}

$myCircle = new Circle( 9,9 );
echo $myCircle->area().PHP_EOL;
?>