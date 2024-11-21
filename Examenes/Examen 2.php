<?php

enum Competition {
  case Amistoso;
  case LigaNacional;
  case CopaNacional;
  case CompeticionEuropea;
}

class Team{
  public array $matches;

  public function __construct(array $matches)
  {
    $this->matches = $matches;
  }

  function moreGoals(){
    $masGoles = array_map(function($game) {
          array_sum($game->score);
        },$this->matches);
        print_r($masGoles);
  }

  function matchesByCompetition(Competition $competition){
    
      $partidosFiltrados = array_map(function($game) {
        if ($game->competition == $competition){
            return $game;
        }
          },$this->matches);
    
  }
}


class Game {
  public string $localTeam;
  public string $awayTeam;
  public array $score;
  public string $stadium;
  public $competition;


public function __construct(string $localTeam, string $awayTeam, array $score, string $stadium, Competition $competition)
{
  $this->localTeam = $localTeam;
  $this->awayTeam = $awayTeam;
  $this->score = $score;
  $this->stadium = $stadium;
  $this->competition = $competition;
}

}

$partido1 = new Game('FCB', 'RMA', [4,0], 'Camp Nou', Competition::CompeticionEuropea);
$partido2 = new Game('Betis', 'FCB', [1,2], 'Villamarin', Competition::CopaNacional);
$partido3 = new Game('FCB', 'Espanyol', [3,2], 'Camp Nou', Competition::LigaNacional);
$partido4 = new Game('Leganes', 'FCB', [0,0], 'Madrid', Competition::Amistoso);

$matches = [$partido1, $partido2, $partido3, $partido4];

$barca = new Team($matches);

// print_r($barca->moreGoals());
print_r($barca->matchesByCompetition(Competition::LigaNacional));

?>