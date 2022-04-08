<?php

include("Reloj.php");

$cronometro = new Reloj;





do {
    echo "Ingrese la opcion que desee. \n";
echo "1) Incrementar.\n";
$opcion = trim(fgets(STDIN));

switch ($opcion) {
    case '1':
        
        if ($cronometro->getSegundo() < 59) {
            $cronometro->Incremento_Reloj_Segundos();
        }elseif ($cronometro->getMinuto() < 59){
            $cronometro->Incremento_Reloj_Minutos();
        }elseif ($cronometro->getHora() < 23){
            $cronometro->Incremento_Reloj_Hora();
        }else{
            $cronometro->puesta_en_cero();
        }

        echo $cronometro;
      
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
} while ($opcion != 3);