<?php

function setTree(){
    $altura = (int)readline('Introdueix un numero enter: ');
    $nivel = 1;
    $anchuraBase = $altura === 1 ? $altura * 2 + 1 : ($altura - 1) * 2 + 1;

    for ($i = 0; $i < $altura; $i++) {
      $espacios = ($anchuraBase - $nivel) / 2;
      echo str_repeat(" ", $espacios) . str_repeat("*", $nivel) . PHP_EOL;
      $nivel += 2; 
  }

  $espaciosTronco = ($anchuraBase - 3) / 2; 
  echo str_repeat(" ", $espaciosTronco) . "|||" . PHP_EOL;

}

echo setTree();