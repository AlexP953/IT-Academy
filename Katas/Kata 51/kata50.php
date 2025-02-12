<?php

function setTree(int $numero): string{
  $numero += 2;
  $tree = ''; 

  for ($i = 1; $i <= $numero; $i++) {
    if ($i % 2 == 0) {
        continue; 
    }
    $tree .= str_repeat(" ", $numero - $i) . str_repeat("* ", $i) . PHP_EOL;
  }
  $tree .= str_repeat(" ", $numero - 2) . "|||";

  return $tree;
}

echo setTree(5);
