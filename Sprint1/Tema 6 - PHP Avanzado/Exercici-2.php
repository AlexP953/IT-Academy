<?php


function predefinedConstants() {
  echo "Este archivo es " . __FILE__ . PHP_EOL . 'Esta es la linea ' .  __LINE__ . PHP_EOL;
  echo "Mi SO es " . PHP_OS . ' y utilizo la version ' . PHP_VERSION . ' de PHP';
}

predefinedConstants();

?>
