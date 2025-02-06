<?php


function makeGroups(array $array, int $groupNumber){
  shuffle($array);
  $groups = [];
  for ($i=0; $i < $groupNumber; $i++) { 
    $groups['Grupo ' . ($i + 1)] = [];
  }

  foreach ($array as $person) {
    $minGroup = array_keys($groups, min($groups))[0];
        
    $groups[$minGroup][] = $person;
  }
  print_r($groups);

}

makeGroups(["Pere","Joan","Jesús","Mayte","Julia"],2);