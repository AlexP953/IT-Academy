<?php

function setTree(){
  $numero = (int)readline('Introdueix un numero enter: ') + 2; 

  for ($i = 1; $i <= $numero; $i++) {
    if ($i % 2 == 0) {
        continue; // Pasa
    }
    echo  str_repeat(" ", $numero - $i) . str_repeat("* ", $i).PHP_EOL;
}
echo str_repeat(" ", $numero -2) . "|||";
}

echo setTree();