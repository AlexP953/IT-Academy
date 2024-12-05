<?php

function calculateDiscount($type, $amount){
  $types = ["regular" => 0.05, "premium" => 0.10, "vip" => 0.15, "other" => 0];
  return $amount - ($amount * $types[$type]);
}

function allDiscounts($discounts, $prices){
  for ($i = 0; $i < count($discounts); $i++) {
    echo calculateDiscount($discounts[$i], $prices[$i]) . PHP_EOL;
  }
}

$discounts = ['regular', 'premium', 'vip', 'other'];
$prices = [1000, 2000, 3000, 500];
allDiscounts($discounts, $prices);
