
<?php

// 1. array_push() - Agrega un elemento "Pera" al final del array.
function ejercicioArrayPush() {
    $frutas = ['Manzana', 'Banana', 'Cereza'];
    array_push($frutas, 'Pera');
}

// 2. array_pop() - Elimina el último elemento del array y muéstralo.
function ejercicioArrayPop() {
    $ciudades = ['Madrid', 'París', 'Londres', 'Berlín'];
    array_pop($ciudades);
}

// 3. array_shift() - Elimina el primer elemento del array y muéstralo.
function ejercicioArrayShift() {
    $colores = ['Rojo', 'Verde', 'Azul', 'Amarillo'];
    array_shift($colores);
}

// 4. array_unshift() - Agrega los números 0 y 1 al inicio del array.
function ejercicioArrayUnshift() {
    $numeros = [2, 3, 4];
    array_unshift($numeros, 0,1);
  }

// 5. array_merge() - Combina dos arrays de animales y muestra el resultado.
function ejercicioArrayMerge() {
    $animales1 = ['Perro', 'Gato'];
    $animales2 = ['Conejo', 'Hamster'];
    $animales3 = array_merge($animales1, $animales2);
  }

// 6. array_combine() - Crea un array asociativo combinando nombres y edades.
function ejercicioArrayCombine() {
    $nombres = ['Ana', 'Luis', 'Carlos'];
    $edades = [25, 30, 35];
    $combinacion = array_combine($nombres, $edades);
}

// 7. array_slice() - Extrae los primeros 5 elementos de un array.
function ejercicioArraySlice() {
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    array_slice($numeros, 0,5);
  }

// 8. array_splice() - Elimina los elementos en la posición 2 y 3 del array y reemplázalos por "X" y "Y".
function ejercicioArraySplice() {
    $letras = ['A', 'B', 'C', 'D', 'E', 'F'];
    array_splice($letras, 2, 2, ['X', 'Y']);
  }

// 9. array_keys() - Obtén y muestra todas las claves del array asociativo.
function ejercicioArrayKeys() {
    $productos = ['P1' => 'Laptop', 'P2' => 'Mouse', 'P3' => 'Teclado'];
    array_keys($productos);
}

// 10. array_values() - Obtén y muestra todos los valores del array asociativo.
function ejercicioArrayValues() {
    $paises = ['España' => 'Madrid', 'Francia' => 'París', 'Italia' => 'Roma'];
    array_values($paises);

}

// 11. in_array() - Comprueba si el número 10 está en el array y muéstralo.
function ejercicioInArray() {
    $numeros = [5, 10, 15, 20];
    $numeros[in_array(10, $numeros)]; // in_array() devuelve el indice donde se encuentra el elemento que buscas.
}

// 12. array_key_exists() - Verifica si la clave "María" existe en el array y muestra un mensaje.
function ejercicioArrayKeyExists() {
    $edades = ['Juan' => 25, 'María' => 28, 'Pedro' => 30];
    if (array_key_exists('María', $edades)){
       $edades['María'];
    } else {
     echo 'No existe';
    }
}

// 13. array_map() - Multiplica por 2 cada número en el array y muestra el nuevo array.
function ejercicioArrayMap() {
    $numeros = [1, 2, 3, 4, 5];
    $new = array_map(function($numb):int {
          return $numb * 2;
        },$numeros);
  }

// 14. array_filter() - Filtra los números mayores de 20 y muéstralos.
function ejercicioArrayFilter() {
    $edades = [15, 22, 18, 25, 30];
    array_filter($edades,function($numb){
        if($numb > 20){
          return $numb;
        }
    });
  }

// 15. array_reduce() - Suma todos los valores del array y muestra el resultado.
function ejercicioArrayReduce() {
    $precios = [10, 20, 30, 40];
    // Agrega aquí la lógica para usar array_reduce()
}

// 16. sort() - Ordena el array de palabras en orden ascendente y muéstralo.
function ejercicioSort() {
    $palabras = ['Manzana', 'Pera', 'Banana', 'Cereza'];
    // Agrega aquí la lógica para usar sort()
}

// 17. rsort() - Ordena el array de números en orden descendente y muéstralo.
function ejercicioRsort() {
    $numeros = [5, 1, 8, 3, 2];
    // Agrega aquí la lógica para usar rsort()
}

// 18. asort() - Ordena el array asociativo por los valores manteniendo la relación clave/valor y muéstralo.
function ejercicioAsort() {
    $productos = ['P1' => 300, 'P2' => 150, 'P3' => 200];
    // Agrega aquí la lógica para usar asort()
}

// 19. arsort() - Ordena el array asociativo en orden descendente por los valores y muéstralo.
function ejercicioArsort() {
    $calificaciones = ['Ana' => 85, 'Luis' => 90, 'Carlos' => 78];
    // Agrega aquí la lógica para usar arsort()
}

// 20. ksort() - Ordena el array por sus claves en orden ascendente y muéstralo.
function ejercicioKsort() {
    $productos = ['B1' => 'Teclado', 'A1' => 'Mouse', 'C1' => 'Monitor'];
    // Agrega aquí la lógica para usar ksort()
}

// 21. krsort() - Ordena el array por sus claves en orden descendente y muéstralo.
function ejercicioKrsort() {
    $productos = ['B1' => 'Teclado', 'A1' => 'Mouse', 'C1' => 'Monitor'];
    // Agrega aquí la lógica para usar krsort()
}

// 22. array_reverse() - Invierte el orden de los elementos del array y muéstralo.
function ejercicioArrayReverse() {
    $numeros = [1, 2, 3, 4, 5];
    // Agrega aquí la lógica para usar array_reverse()
}

// 23. array_unique() - Elimina los valores duplicados del array y muéstralo.
function ejercicioArrayUnique() {
    $numeros = [1, 2, 2, 3, 4, 4, 5];
    // Agrega aquí la lógica para usar array_unique()
}

// 24. count() - Cuenta el número de elementos en el array y muéstralo.
function ejercicioCount() {
    $colores = ['Rojo', 'Verde', 'Azul', 'Amarillo'];
    // Agrega aquí la lógica para usar count()
}

// 25. sizeof() - Usa sizeof() para contar los elementos del array y muéstralo.
function ejercicioSizeOf() {
    $animales = ['Perro', 'Gato', 'Conejo'];
    // Agrega aquí la lógica para usar sizeof()
}

// 26. array_diff() - Muestra los elementos que están en el primer array pero no en el segundo.
function ejercicioArrayDiff() {
    $array1 = [1, 2, 3, 4, 5];
    $array2 = [4, 5, 6, 7, 8];
    // Agrega aquí la lógica para usar array_diff()
}

// 27. array_intersect() - Muestra los elementos comunes entre dos arrays.
function ejercicioArrayIntersect() {
    $array1 = [1, 2, 3, 4, 5];
    $array2 = [3, 4, 5, 6, 7];
    // Agrega aquí la lógica para usar array_intersect()
}

// 28. array_sum() - Calcula y muestra la suma de los elementos del array.
function ejercicioArraySum() {
    $numeros = [5, 10, 15, 20];
    // Agrega aquí la lógica para usar array_sum()
}

// 29. array_product() - Calcula y muestra el producto de los elementos del array.
function ejercicioArrayProduct() {
    $numeros = [2, 3, 4];
    // Agrega aquí la lógica para usar array_product()
}

// 30. array_column() - Extrae y muestra los valores de una columna específica de un array multidimensional.
function ejercicioArrayColumn() {
    $personas = [
        ['nombre' => 'Juan', 'edad' => 30],
        ['nombre' => 'Ana', 'edad' => 25],
        ['nombre' => 'Luis', 'edad' => 28]
    ];
    // Agrega aquí la lógica para usar array_column()
}

// 31. array_fill()
// Llena un array con un valor determinado.
function ejercicioArrayFill() {
  $array = array_fill(0, 5, 'Hola');
  // Agrega aquí la lógica para usar array_fill()
}

// 32. array_fill_keys()
// Llena un array con un valor determinado usando un array de claves.
function ejercicioArrayFillKeys() {
  $claves = ['a', 'b', 'c'];
  $array = array_fill_keys($claves, 'Valor');
  // Agrega aquí la lógica para usar array_fill_keys()
}

// 33. array_walk()
// Aplica una función de callback a cada elemento de un array.
function ejercicioArrayWalk() {
  $numeros = [1, 2, 3, 4];
  array_walk($numeros, function(&$valor) {
      $valor *= 2; // Multiplica cada valor por 2
  });
  // Agrega aquí la lógica para usar array_walk()
}

// 34. array_walk_recursive()
// Aplica una función de callback a cada elemento de un array de forma recursiva.
function ejercicioArrayWalkRecursive() {
  $array = [
      'nombre' => 'Carlos',
      'dirección' => [
          'ciudad' => 'Madrid',
          'códigoPostal' => 28001
      ]
  ];
  array_walk_recursive($array, function(&$valor, $clave) {
      $valor = strtoupper($valor); // Convierte todos los valores a mayúsculas
  });
  // Agrega aquí la lógica para usar array_walk_recursive()
}

// 35. array_replace()
// Reemplaza los elementos de un array con los elementos de otros arrays.
function ejercicioArrayReplace() {
  $array1 = ['a' => 'Rojo', 'b' => 'Azul', 'c' => 'Verde'];
  $array2 = ['a' => 'Amarillo', 'c' => 'Naranja'];
  $resultado = array_replace($array1, $array2);
  // Agrega aquí la lógica para usar array_replace()
}

// 36. array_replace_recursive()
// Similar a array_replace(), pero de forma recursiva.
function ejercicioArrayReplaceRecursive() {
  $array1 = ['a' => 'Rojo', 'b' => ['x' => 'Azul', 'y' => 'Verde']];
  $array2 = ['a' => 'Amarillo', 'b' => ['x' => 'Naranja']];
  $resultado = array_replace_recursive($array1, $array2);
  // Agrega aquí la lógica para usar array_replace_recursive()
}

// 37. array_rand()
// Selecciona una o más claves aleatorias de un array.
function ejercicioArrayRand() {
  $frutas = ['Manzana', 'Pera', 'Banana', 'Cereza'];
  $aleatorio = array_rand($frutas);
  // Agrega aquí la lógica para usar array_rand()
}

// 38. shuffle()
// Mezcla los elementos de un array de forma aleatoria.
function ejercicioShuffle() {
  $numeros = [1, 2, 3, 4, 5];
  shuffle($numeros);
  // Agrega aquí la lógica para usar shuffle()
}

// 39. array_chunk()
// Divide un array en fragmentos más pequeños.
function ejercicioArrayChunk() {
  $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  $chunks = array_chunk($numeros, 3);
  // Agrega aquí la lógica para usar array_chunk()
}

// 40. array_pad()
// Llena un array hasta una longitud específica con un valor.
function ejercicioArrayPad() {
  $numeros = [1, 2, 3];
  $padded = array_pad($numeros, 5, 0); // Rellena hasta 5 elementos con 0
  // Agrega aquí la lógica para usar array_pad()
}

// 41. array_flip()
// Intercambia las claves y los valores de un array.
function ejercicioArrayFlip() {
  $colores = ['Rojo' => 'R', 'Verde' => 'V', 'Azul' => 'A'];
  $flip = array_flip($colores);
  // Agrega aquí la lógica para usar array_flip()
}

// 42. array_search()
// Busca un valor en un array y devuelve su clave si lo encuentra.
function ejercicioArraySearch() {
  $colores = ['Rojo', 'Verde', 'Azul'];
  $clave = array_search('Verde', $colores);
  // Agrega aquí la lógica para usar array_search()
}

// 43. array_multisort()
// Ordena múltiples arrays o un array multidimensional.
function ejercicioArrayMultisort() {
  $nombres = ['Ana', 'Luis', 'Carlos'];
  $edades = [25, 30, 35];
  array_multisort($edades, SORT_ASC, $nombres);
  // Agrega aquí la lógica para usar array_multisort()
}

// 44. array_count_values()
// Cuenta la frecuencia de cada valor en un array.
function ejercicioArrayCountValues() {
  $frutas = ['Manzana', 'Pera', 'Manzana', 'Cereza', 'Manzana'];
  $conteo = array_count_values($frutas);
  // Agrega aquí la lógica para usar array_count_values()
}

// 45. range()
// Crea un array con un rango de elementos.
function ejercicioRange() {
  $rango = range(1, 10); // Genera un array de 1 a 10
  // Agrega aquí la lógica para usar range()
}

// 46. list()
// Asigna variables en un solo paso a partir de un array.
function ejercicioList() {
  $array = ['Rojo', 'Verde', 'Azul'];
  list($color1, $color2, $color3) = $array;
  // Agrega aquí la lógica para usar list()
}

// 47. compact()
// Crea un array a partir de variables y sus valores.
function ejercicioCompact() {
  $nombre = 'Juan';
  $edad = 25;
  $array = compact('nombre', 'edad');
  // Agrega aquí la lógica para usar compact()
}

// 48. extract()
// Importa variables de un array al ámbito actual.
function ejercicioExtract() {
  $persona = ['nombre' => 'Carlos', 'edad' => 28];
  extract($persona);
  // Agrega aquí la lógica para usar extract()
}

// 49. array_is_list()
// Comprueba si un array es un array indexado (PHP 8.1+).
function ejercicioArrayIsList() {
  $array = ['A', 'B', 'C'];
  $isList = array_is_list($array);
  // Agrega aquí la lógica para usar array_is_list()
}

ejercicioArrayUnshift();
ejercicioArrayMerge();
ejercicioArrayCombine();
ejercicioArraySlice();
ejercicioArraySplice();
ejercicioArrayKeys();
ejercicioArrayValues();
ejercicioInArray();
ejercicioArrayKeyExists();
ejercicioArrayMap();
ejercicioArrayFilter();
ejercicioArrayReduce();
ejercicioSort();
ejercicioRsort();
ejercicioAsort();
ejercicioArsort();
ejercicioKsort();
ejercicioKrsort();
ejercicioArrayReverse();
ejercicioArrayUnique();
ejercicioCount();
ejercicioSizeOf();
ejercicioArrayDiff();
ejercicioArrayIntersect();
ejercicioArraySum();
ejercicioArrayProduct();
ejercicioArrayColumn();
ejercicioArrayFill();
ejercicioArrayFillKeys();
ejercicioArrayWalk();
ejercicioArrayWalkRecursive();
ejercicioArrayReplace();
ejercicioArrayReplaceRecursive();
ejercicioArrayRand();
ejercicioShuffle();
ejercicioArrayChunk();
ejercicioArrayPad();
ejercicioArrayFlip();
ejercicioArraySearch();
ejercicioArrayMultisort();
ejercicioArrayCountValues();
ejercicioRange();
ejercicioList();
ejercicioCompact();
ejercicioExtract();
ejercicioArrayIsList();