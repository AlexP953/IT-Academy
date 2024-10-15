<?php

class Shape {
  function __construct(public int $width = 0, public int $height = 0) {}
  
  public function __toString() {
    return "Soy una figura con ancho {$this->width} y alto {$this->height}" . PHP_EOL;
  }

  public function __clone() {
    echo "Se ha clonado el objeto Shape" .PHP_EOL;
}
}


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
$myRectangle = new Rectangle( 8 , 10);
$mySecondRectangle = clone $myRectangle;
echo $myTriangle;
echo $mySecondRectangle;
?>