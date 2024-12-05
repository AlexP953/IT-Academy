<?php

function calculateDiscount($type, $amount){
  $types = ["regular" => 0.05, "premium" => 0.10, "vip" => 0.15, "other" => 0];
  return $amount - ($amount * $types[$type]);
}

function allDiscounts($calcs){
  foreach ($calcs as $type => $price) {
    echo calculateDiscount($type, $price) . PHP_EOL;
}
}

$calcs = ['regular'=>1000, 'premium'=>2000, 'vip'=>3000,'other'=>500];
allDiscounts($calcs);