<?php


function makeGroups(array $array, int $groupNumber){
  for ($i=0; $i < $groupNumber; $i++) { 
    $groups[] = array('Grupo ' . $i+1 => []);
  }

  foreach ($array as $person) {
    
    if (count($groups[0]) > count($groups[1])) {
      $groups = array_reverse($groups);
    }

    $groups[0][] = $person;
  }
  print_r($groups);

}

makeGroups(["Pere","Joan","Jesús","Mayte","Julia"],2);