<?php

function getSnakeString(string $badString){

  // preg_split devuelve array de elementos del string separado segun el regex que le pidas
  $newString = preg_split("/(?<=[a-z])(?=[A-Z])|\s+|\n+|-/", $badString, -1, PREG_SPLIT_NO_EMPTY);

  // implode Une elementos de un array en un string. tambien le hago un strtolower para que sea todo minuscula
  $newString = implode("_", array_map('strtolower', $newString));

  return $newString;
};

// echo getSnakeString('CamelCaseCase');
// echo getSnakeString('Camel-Case-Case');
// echo getSnakeString('Camel Case Case');
// echo getSnakeString('camelCaseCase');
echo getSnakeString('camelCaseCase');
?>