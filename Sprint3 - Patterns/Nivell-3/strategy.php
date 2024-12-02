<?php

interface carCouponGenerator{
  public function addSeasonDiscount();
  public function addStockDiscount();

}

abstract class CouponGenerator {
  protected $discount = 0;

  public function generateCoupon() {
    echo "Get {$this->discount}% off the price of your new car." .PHP_EOL;
}
}

class bmwCuoponGenerator extends CouponGenerator implements carCouponGenerator
{

  public function addSeasonDiscount(){
    $this->discount += 5;
  }

  public function addStockDiscount(){
    $this->discount += 7;
  }

}

class mercedesCuoponGenerator extends CouponGenerator implements carCouponGenerator
{

  public function addSeasonDiscount(){
    $this->discount += 4;
  }

  public function addStockDiscount(){
    $this->discount += 10;
  }
  
}

$bmwCoupon = new bmwCuoponGenerator();
$bmwCoupon->addSeasonDiscount();
$bmwCoupon->addStockDiscount();
$bmwCoupon->generateCoupon(); 

$mercedesCoupon = new mercedesCuoponGenerator();
$mercedesCoupon->addSeasonDiscount();
$mercedesCoupon->addStockDiscount();
$mercedesCoupon->generateCoupon();
