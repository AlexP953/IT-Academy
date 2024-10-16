<?php
echo PHP_EOL.'Nivell 2'.PHP_EOL;
echo 'Exercici 1'.PHP_EOL;

// Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

interface geometricShape {
  public function area():float;
}

abstract class Shape {
  public $width;
  public $height;

  public function __construct(float $width, float $height){
    $this->width = $width;
    $this->height = $height;
  }

  public function area():float {
    return $this->width * $this->height;
  }
}

class Triangle extends Shape implements geometricShape{

  public function area():float{
    return 0.5 * $this->width * $this->height;
  }

}

class Rectangle extends Shape implements geometricShape{}

$myTriangle = new Triangle( 9,6 );
echo $myTriangle->area().PHP_EOL;
$myRectangle = new Rectangle( 9,6 );
echo $myRectangle->area().PHP_EOL;

?>