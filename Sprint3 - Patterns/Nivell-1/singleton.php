<?php

class Tigger {

  private static $instance = null;
  private static $counter = 0;

  private function __construct() {
          echo "Building character..." . PHP_EOL;
  }

  public static function getInstance() {
    if (self::$instance === null) {
        self::$instance = new Tigger();
    }
    return self::$instance;
}

  public function roar() {
          echo "Grrr!" . PHP_EOL;
          self::$counter += 1;
  }

  public function getCounter(){
    return self::$counter;
  }

}

$tigre = Tigger::getInstance();

for ($i=0; $i < 4; $i++) { 
  $tigre->roar();
}

echo $tigre->getCounter(); 

?>