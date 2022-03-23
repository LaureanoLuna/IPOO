<?php

include("Reloj.php");

$cronometro = new Reloj;





echo "Ingrese la opcion que desee. \n";
echo "1) Iniciar cronomertro.\n";
echo "2) Puesta en cero el cronometro.\n";
$opcion = trim(fgets(STDIN));

switch ($opcion) {
    case '1':
        $i = 0;
        while ($cronometro->getSegundo() < 59) {
                
            $cronometro->Incremento_Reloj_Segundos($i);
            $i++;
            echo $cronometro;
        }
        $j=0;

        while ($cronometro->getMinuto() < 59) {
            
            

            $cronometro->Incremento_Reloj_Minutos($j);
            $j++;
            echo $cronometro;

            
        }

        $k=0;

        while ($cronometro->getHora() < 23) {
            
            
        
        $cronometro->Incremento_Reloj_Hora($k);
            $k++;
        
        echo $cronometro;
        } 
        
        break;
    case '2':

        $cronometro->puesta_en_cero();
        $cronometroCero = "00 :: 00 :: 00 ";
        echo $cronometroCero;
        
        break;
    default:
        echo $cronometro->__destruct()."\n";
        echo "Ingrese una opcion valida\n ";
        break;
}