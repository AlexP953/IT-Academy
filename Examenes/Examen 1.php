<?php
// Representar datos de jugadores de futbol Plantilla - jugadores.
// fueras de juego por temporada al rival
// V/E/D
// jugador
  // Nombre 
  // Edad
  // altura
  // Media KM/partido
// 4 jugadores

// 2. Metodos
  // Proceso de media KM partido pro Plantilla
  // Jugador mas joven


class Plantilla {

  public $partidos = array("victorias" => 4, "empate" => 1, "derrotas" => 0);
  public $fueraDeJuego = 47;
  public $plantilla = [
    [
      "name"=> "Raphinha",
      "edad"=> 23,
      "altura"=> 1.76,
      "mediaKMP"=> 45
    ],
    [
      "name"=> "Leao",
      "edad"=> 29,
      "altura"=> 1.96,
      "mediaKMP"=> 40
    ],
    [
      "name"=> "Ter Stegen",
      "edad"=> 31,
      "altura"=> 1.90,
      "mediaKMP"=> 1
    ],
    [
      "name"=> "Lamine Yamal",
      "edad"=> 17,
      "altura"=> 1.86,
      "mediaKMP"=> 35
    ]
  ];

  function totalKMAverage(){
    $totalKMs = array_reduce($this->plantilla, function($sum, $player) {
      return $sum + $player['mediaKMP'];
    }, 0);

    $average = $totalKMs / count($this->plantilla);
    return $average;
  }

  function youngerPlayer(){
    $youngPlayer = min(array_column($this->plantilla, 'edad'));
    $youngerPlayer = array_filter($this->plantilla, function($jugador) use ($youngPlayer) {
        return $jugador['edad'] === $youngPlayer;
    });
    print_r($youngerPlayer);
    
  }

}


$barca = new Plantilla();
echo $barca->totalKMAverage();
echo $barca->youngerPlayer();

?>