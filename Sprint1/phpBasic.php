<?php

// Exercici 1 -  integer, double, string i boolean

$entero = 45;
$doble = 78.09;
$palabra = 'Estring';
$boleano = true;

define('myName','Alex Peris');
echo '<h1 style="font-size: 3rem; color: red;">Nivell 1</h1>';
echo '<h2>Exercici 1</h2>';
echo 'integer -> '.$entero.'<br>';
echo 'double -> '.$doble.'<br>';
echo 'string -> '.$palabra.'<br>';
echo 'boolean -> '.$boleano.'<br>';
echo '<h3>'.myName.'</h3>';

// Exercici 2
echo '<h2>Exercici 2</h2>';

$helloWorld = "Hello, World!";
$separacion = '<br>';
echo $helloWorld; // Imprimeix per pantalla "Hello, World!" utilitzant una variable
echo $separacion;
echo (strtoupper($helloWorld)); // Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
echo $separacion;
echo (strlen($helloWorld)); // Imprimeix per pantalla la mida (longitud) de la variable.
echo $separacion;
echo (strrev($helloWorld)); // Imprimeix per pantalla l'string en ordre invers de caràcters.
echo $separacion;

$secondVar = 'Aquest és el curs de PHP';

echo $helloWorld.' '.$secondVar; // Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings

// Exercici 3
echo '<h2>Exercici 3</h2>';
echo $separacion;


// a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

$X = 1;
$Y = 2;
$N = 3.03;
$M = 4.04;

echo 'X: '.$X.', Y: '.$Y;
echo $separacion;
echo 'Suma de X + Y: '.$X+$Y;
echo $separacion;
echo 'Resta de X - Y: '.$X-$Y;
echo $separacion;
echo 'Producte de X * Y: '.$X*$Y;
echo $separacion;
echo 'Mòdul de X % Y: '.$X%$Y;

echo ' <br> ---------------------- <br>';

echo 'N: '.$N.', M: '.$M;
echo $separacion;
echo 'Suma de N + M: '.$N+$M;
echo $separacion;
echo 'Resta de N - M: '.$N-$M;
echo $separacion;
echo 'Producte de N * M: '.$N*$M;
echo $separacion;
echo 'Mòdul de N % M: '.$N%$M;

echo ' <br> ---------------------- <br>';


echo 'Doble de les variables: X: '.$X*2 .', Y: '.$Y*2 . ', N: '.$N*2 . ', M: '.$M*2;
echo $separacion;
echo 'Suma de totes les variables: '. $X + $Y + $N + $M;
echo $separacion;
echo 'Producte de totes les variables: '. $X * $Y * $N * $M;

echo ' <br> ---------------------- <br>';

// b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.

function calculator($param1,$param2,$method){
  switch ($method) {
    case '+': return $param1 + $param2;
    case '-': return $param1 - $param2;
    case '*': return $param1 * $param2;
    case '/': return $param1 / $param2;
  }
}

echo calculator(5,10,'/');

// Exercici 4
echo '<h2>Exercici 4</h2>';
echo $separacion;

// Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.

function counter($limit = 10, $step = 1){
  for ($i=0; $i <= $limit; $i+=$step) { 
    echo $i. ', ';
  }
}

counter(15, 1);


// Exercici 5
echo '<h2>Exercici 5</h2>';
echo $separacion;

// Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

// Condicions:

// Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
// Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
// Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
// Si la nota és menor a 33%, l'estudiant reprovarà.

function StudentGrade($note){

  switch ($note) {
    case $note>60: return 'Primera divisió';
    case $note>=45 && $note<= 59: return 'Segona divisió';
    case $note>=33 && $note<= 44: return 'Tercera divisió';
    case $note<33: return 'Suspès';
  }
}

echo StudentGrade(45);

// Exercici 6
echo '<h2>Exercici 6</h2>';
echo $separacion;

// Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.

function isBitten(){
  if( rand(0,10) % 2 === 0 ) {
    $response =  true;
    return 'Charlie em mossega el dit';
  } else {
    $response =  false;
    return 'Charlie NO em mossega el dit';
  }
}

echo isBitten();

echo '<h1 style="font-size: 3rem; color: red;">Nivell 2</h1>';

// Exercici 1
echo '<h2>Exercici 1</h2>';
echo $separacion;

// Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

// Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
// Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.

function calculateCallPhone($minutes){
  $totalCost = 0.10;
  $secondStretch;

  if ($minutes > 3){
    $secondStretch = $minutes - 3;
    $totalCost = $totalCost + $secondStretch * 0.05;
  }
  return $totalCost;
}

echo 'El cost de la trucada es: '.calculateCallPhone(4).'€';

// Exercici 2
echo '<h2>Exercici 2</h2>';
echo $separacion;


// Imagina que som a una botiga on es ven:

// Xocolata: 1 euro
// Xiclets: 0,50 euros
// Caramels: 1,50 euros
// Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:

// 2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:

// funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

// Sent, per tant, el total, 4.

$totalAddToCart = 0;

function addToCart ($amount, $product) {
  global $totalAddToCart;
  switch ($product) {
    case 'Xocolata':
      $totalAddToCart += $amount * 1;
      break;
    case 'Xiclets':
      $totalAddToCart += $amount * 0.5;
      break;
    case 'Caramels':
      $totalAddToCart += $amount * 1.5;
      break;
  }
}

echo $separacion;
addToCart(2, 'Xocolata');
addToCart(1,'Xiclets');
addToCart(1,'Caramels');
echo $totalAddToCart.'€ perque ara hi han 2 xocolatas, 1 xiclet i 1 carmel.' 

?>