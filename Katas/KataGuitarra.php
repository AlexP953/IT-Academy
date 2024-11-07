<?php

class Chords{
  public array $acordes = ['Do','Re', 'Mi', 'Fa', 'Sol'];

  function getChord(){
    return $this->acordes[rand(0,count($this->acordes)-1)] . PHP_EOL;
  }

  function changeChord(int $time, int $limit):void{
    $acordesTocados = [];
    $i = 1;
    while (count($acordesTocados) < $limit) {
      $acordesTocados[] = $this->getChord();
      echo $this->getChord();
      sleep($time);
    }
  }
}

$myChords = new Chords();

$myChords-> changeChord(1,3);

?>