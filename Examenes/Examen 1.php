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
  public array $partidos;
  public int $fueraDeJuego;
  public array $players;

  public function __construct(array $partidos, int $fueraDeJuego, array $players)
  {
    $this->partidos = $partidos;
    $this->fueraDeJuego = $fueraDeJuego;
    $this->players = $players;
  }

  function totalKMAverage(){
    $totalKMs = array_reduce($this->players, function($sum, $player) {
      return $sum + $player->averageKM;
    }, 0);

    $average = $totalKMs / count($this->players);
    return $average;
  }

  function youngerPlayer(){
    $youngPlayer = min(array_map(function($player) {
      return $player->age; 
    }, $this->players));
    $youngerPlayer = array_filter($this->players, function($player) use ($youngPlayer) {
      return $player->age === $youngPlayer; 
    });
    return $youngerPlayer;    
  }

}

class Player {
  public string $name;
  public int $age;
  public float $height;
  public float $averageKM;

  public function __construct(string $name, int $age, float $height, float $averageKM)
  {
    $this->name = $name;
    $this->age = $age;
    $this->height = $height;
    $this->averageKM = $averageKM;
  }
}

$Raph = new Player('Raphinha', 26, 1.76, 78.06);
$Stegen = new Player('Stegen', 32, 1.98, 1.06);
$Lamine = new Player('Lamine', 17, 1.72, 34.06);
$Casado = new Player('Casado', 21, 1.87, 95.06);

$jugadores = [$Raph,$Stegen,$Lamine,$Casado];
$partidos = array("victorias" => 4, "empate" => 1, "derrotas" => 0);

$barca = new Plantilla($partidos, 48, $jugadores);
echo $barca->totalKMAverage();
print_r($barca->youngerPlayer());

?>