<?php


function numerosFactorial ($numero){
   $num = 1;
  while ($numero >= 1) {
      $num = $num * $numero;
      $numero = $numero - 1;
  }
    return ($num);
}

function esNumeroPar ($numero){
    $respuesta = false;

    if ($numero % 2 == 0){
        $respuesta = true;
    }
    return ($respuesta);
}

function sonNumerosDivisibles ($numN, $numM){
    $respuesta = false;

    if ($numN % $numM == 0){
        $respuesta = true;
    }
    return ($respuesta);
}


function ubicacionEnElArray ($array, $valor){
       
    foreach ($array as $key => $value) {
        if ($value == $valor ){
            $ubicacionValor = $key;
        }
    }

    return ($ubicacionValor);
 
}


function valorYubicacion ($array){
    $valorMin= min($array);
    $valorMax = max($array);

    echo "Valor Minimo ".$valorMin." . Ubicacion ".ubicacionEnElArray($array, $valorMin)."\n";
    echo "Valor Maximo ".$valorMax." .Ubicacion ".ubicacionEnElArray($array, $valorMax);

}

/* Cree una función leerNombres, cuyo parámetro de entrada formal es una cantidad n de nombres (ciclo
denido), que solicite a un usuario los n nombres y los almacene en un arreglo indexado. aa función debe
retornar el arreglo indexado. */

function leerNombres ($nombre){
    $nombresIngresados[] = $nombre;

    return ($nombre);
}

function nombreLeido (){
    for ($i=0; $i < 3 ; $i++) { 
        echo "Ingrese un Nombre ";
        $ingresoDeNombre= trim(fgets(STDIN));
    
        $arregloDeNombres[] = leerNombres($ingresoDeNombre);
    }
    
}

/* Dado un número que se corresponde a un año calendario, retornar un arreglo con todos los años bisiestos
menores al año ingresado.
Nota: Un año es bisiesto cuando es múltiplo de cuatro, exceptuando los múltiplos de 100 que no lo sean de
400. 7
 */

 function aniosBisiestos ($anio){
    while ($anio > 0) {
        if ($anio % 4 == 0 && $anio % 100 != 0){
            echo $anio."\n";
            $anio = $anio - 4;
        }
        else{
            $anio = $anio - 4;
        }
    }
 }
 
    /*  Dado 2 arreglos A y B, de N y M elementos respectivamente. Construir un algoritmo que retorne un arreglo
 con los elementos de A mas los elementos de B.  */

  function arraySumados ($arregloUno, $arregloDos){
      for ($i=0; $i < count($arregloUno) || $i < count($arregloDos) ; $i++) { 
        $arrayResultadoSuma[] = $arregloUno[$i] + $arregloDos[$i];
      }

      return ($arrayResultadoSuma);
  }

 /*  $arrayUno = [1,9,4];
  $arrayDos = [3,2,3,10];

  $p= comparacionSumaDeArreglos($arrayUno, $arrayDos);
  print_r($p); */

 function ejercicioN7 ($arregloA, $arregloB){
    if (count($arregloA) == count($arregloB)){
        $arreglo = arraySumados($arregloA, $arregloB);
        
    }elseif (count($arregloA) < count($arregloB)){
        while (count($arregloA) == count($arregloB)) {
            $i = 1;
            array_pad($arregloA, $i, 0);
            $i++;
        }
        $arreglo = arraySumados($arregloA, $arregloB);
   }elseif (count($arregloA) > count($arregloB)){
        while (count($arregloA) == count($arregloB)) {
            $i = 1;
            array_pad($arregloB, $i, 0);
            $i++;
            }
       $arreglo = arraySumados($arregloA, $arregloB);
   }
   
   return ($arreglo);
 }


 /* Dado 2 arreglos A y B, de N y M elementos respectivamente. Construir un algoritmo que retorne un arreglo
con los elementos de A que no estan en B. */

function ejercicioN8 (){
    $primerArreglo = [1,2,5,6];
    $segundoArreglo = [1,2,4,5];

    function comparacionElementos ($array, $arreglo){
        $diferenciaDeLosArreglos = array_diff($array, $arreglo);

        return ($diferenciaDeLosArreglos);
    }

$array = comparacionElementos($primerArreglo, $segundoArreglo);
print_r($array);
}

