<?php

$separacion = PHP_EOL;

echo 'Nivell 1'.PHP_EOL;
echo 'Exercici 1'.PHP_EOL;

// Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.

$myFirstArray = [];

$myFirstArray[] = 1;
$myFirstArray[] = 2;
$myFirstArray[] = 3;
$myFirstArray[] = 4;
$myFirstArray[] = 5;

for ($i=0; $i < count($myFirstArray); $i++) { 
  print_r($myFirstArray[$i].', ');
}

echo $separacion;
echo 'Exercici 2'.PHP_EOL;

$X = array (10, 20, 30, 40, 50,60);
// Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.

print_r($X);
echo $separacion;
echo 'Mida inicial='.count($X);
array_pop($X);
echo $separacion;
print_r($X);
echo $separacion;
echo 'Nova mida= '.count($X);


echo $separacion;
echo 'Exercici 3'.PHP_EOL;

// Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

// Per exemple:

// Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.

function isRepeated(array $X, string $character): bool {
  
  $result = array_filter($X, fn($element) => strpos($element, $character) !== false);

  if(count($result) === count($X)){
    echo 'Retorna true';
    return true;
  } else {
    echo 'Retorna fals';
    return false;
  };
};

isRepeated($X = array ('hola', 'php', 'html'), 'l');

echo $separacion;
echo 'Exercici 4'.PHP_EOL;

// Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

//   nom
//   edat
//   email
//   menjar favorit

$alexInfo = array("Nom" => "Alex", "Edat" => 29, "email" => "alexperis95@gmail.com", "menjarFav" => "Fajitas");

print_r($alexInfo);

echo 'Nivell 2'.PHP_EOL;
echo 'Exercici 1'.PHP_EOL;

// Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:
// La intersecció dels dos arrays (nombres en comú)
// La mescla dels dos arrays.

function twoArrays():void{
  $firstArray = [1, 4, 4.5, 6, 8.8, 9, 15.15];
  $secondArray = [0.8, 1, 3, 4.5, 5, 6.8, 25, 515];

  $intersection = array_intersect($firstArray, $secondArray);
  print_r($intersection);

  $newArray = array_merge($firstArray, $secondArray);
  print_r($newArray);

  // Ordenado 
  sort($newArray);
  print_r($newArray);
};

twoArrays();

echo 'Nivell 2'.PHP_EOL;
echo 'Exercici 2'.PHP_EOL;

// Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

// A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.
$notes = array("Alex" => [6,6,7,6,6], "Bernat" => [8,8,8,8,8], "Carles" => [1,8,2,9,5], "David" => [1,2,3,2,1]);

function printNotes(array $arrayNotes):void{
  print_r($arrayNotes);
};

printNotes($notes);

$sumaTotal = 0;
$quantityNotes = 0;

function medians(array $arrayNotes): float{
  global $sumaTotal;
  global $quantityNotes;
  $suma = array_sum($arrayNotes); 
  $sumaTotal += $suma;
  $cantidad = count($arrayNotes); 
  $quantityNotes += $cantidad;
  
  return $suma / $cantidad; 
};

function mitjanes(array $notes):void{
  global $sumaTotal;
  global $quantityNotes;
  foreach ($notes as $alumno => $notasAlumno) {
    $media = medians($notasAlumno);
    echo "La mitjana de $alumno es: $media".PHP_EOL;
  }
    echo 'i la suma total es '.$sumaTotal / $quantityNotes;
}

mitjanes($notes);

echo PHP_EOL.'Nivell 3'.PHP_EOL;
echo 'Exercici 1'.PHP_EOL;

// Donat un array d’enters, fes un programa que:

// Retorni cada valor de l’array elevat al cub fent servir la funció array_map().

$integersArray = [1,2,3,4,5];

function cubedArray(array $integersCubed): array {
  $result = array_map(function($numb):int {
    return $numb * $numb * $numb;
  },$integersCubed);
  print_r($result);
  return $result;
};

cubedArray($integersArray);

echo 'Exercici 2'.PHP_EOL;


?>