<?php
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

abstract class CircularShape {
  public $radius;

  public function __construct( float $radius ){
    $this->radius = $radius;
  }
}

class Circle extends CircularShape implements geometricShape{
  public function area():float{
    return 3.14 * ($this->radius ** 2);
  }
}

$myCircle = new Circle( 9 );
echo $myCircle->area().PHP_EOL;
?>