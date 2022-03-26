<?php
include('Calculadora.php');

$calculadora = new Calculadora();

echo "Que calculo deseea realiza \n";
echo "Sumar \n";
echo "Restar \n";
echo "Multiplicar \n";
echo "Dividir \n";

$opcion = trim(fgets(STDIN));

switch ($opcion) {
    case 'Sumar':
        echo "Ingrese un valor seguido de enter \n";
        $valor1 = trim(fgets(STDIN));
        $valor2 = trim(fgets(STDIN));
        $calculadora->Sumar($valor1, $valor2);

         echo "El resultado es ";
        break;
    case 'Restar':
        echo "Ingrese un valor seguido de enter \n";
        $valor1 = trim(fgets(STDIN));
        $valor2 = trim(fgets(STDIN));

        $calculadora->Restar($valor1, $valor2);

        echo "El resultado es ";
        break;
    case 'Multiplicar':

        echo "Ingrese un valor seguido de enter \n";
        $valor1 = trim(fgets(STDIN));
        $valor2 = trim(fgets(STDIN));

        $calculadora->Multiplicar($valor1, $valor2);

        echo "El resultado es ";
        break; 
    
    case 'Dividir':
        echo "Ingrese un valor seguido de enter \n";
        $valor1 = trim(fgets(STDIN));
        $valor2 = trim(fgets(STDIN));

        $calculadora->Dividir($valor1, $valor2);

        echo "El resultado es ";
        break;
    default:
        echo "Ingrese una opcion correcta ";
        break;
}
