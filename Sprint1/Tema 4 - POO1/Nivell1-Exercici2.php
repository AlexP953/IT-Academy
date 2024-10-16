<?php

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