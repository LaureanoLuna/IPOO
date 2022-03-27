<?php

include('Cuadrado.php');

$a = ["X" => 0, "Y" => 3];
$b = ["X" => 3, "Y" => 3];
$c = ["X" => 3, "Y" => 0];
$d = ["X" => 0, "Y" => 0];
$objCuadrado = new Cuadrado($a,$b,$c,$d);
/*  print_r($objCuadrado->getVertice_1());

print_r($objCuadrado); */
 $e = ["X" => 1, "Y" => 1];
//echo $objCuadrado->Desplazar($e);
//$objCuadrado->Area(); */
echo $objCuadrado->Aumentar(1);
echo $objCuadrado->Desplazar($e);
echo $objCuadrado->Area();
?>