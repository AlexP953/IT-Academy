<?php

// Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. Cada pel·lícula té un nom, una duració, i un director/a.

// Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

// Per a cada cinema, mostrar les dades de cada pel·lícula.
// Per a cada cinema, mostrar la pel·lícula amb major duració.
// Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
class Cinema {
  public string $name;
  public string $country;
  public array $movieList;

  public function __construct(string $name, string $country, array $movieList)
  {
    $this->name = $name;
    $this->country = $country;
    $this->movieList = $movieList;
  }

  public function getMovie(){
    // simplemente devuelve el array completo
    return $this->movieList;
  }

  public function getLargeMovie(){
    $largeMovie = null;

    // si no tiene un valor asignado o la peli es mas larga que al asignada, se actualiza
    foreach ($this->movieList as $movie) {
        if ($largeMovie === null || $movie->duration > $largeMovie->duration) {
            $largeMovie = $movie;
        }
    }
    return $largeMovie;
  }

  public function getMoviesByDirector(string $nameDirector) {
    $moviesByDirector = [];

    // Recorre las películas del cine actual
    foreach ($this->movieList as $movie) {
        // Si la película es del director y no está ya en el array
        if ($movie->director === $nameDirector && !in_array($movie, $moviesByDirector, true)) {
            $moviesByDirector[] = $movie;
        }
    }

    return $moviesByDirector;
  }
}

class Movie {
  public string $movieName;
  public int $duration; // en minutos
  public string $director;

  public function __construct (string $movieName, int $duration, string $director){
    $this->movieName = $movieName;
    $this->duration = $duration;
    $this->director = $director;
  }
}

$movie1 = new Movie("Pelicula A", 120, "Director 1");
$movie2 = new Movie("Pelicula B", 150, "Director 2");
$movie3 = new Movie("Pelicula C", 90, "Director 3");

$movieList = [$movie1, $movie2, $movie3];

$cinema1 = new Cinema("Cine Central", "Barcelona", $movieList);

// Buscar películas del director "Director 3"
print_r($cinema1->getMoviesByDirector("Director 3"));

?>