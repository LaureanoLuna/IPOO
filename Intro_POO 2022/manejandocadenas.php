<?php

function cantidadCaracteres ($cadena){
    
    $numDeCaracteres = strlen($cadena);

    return $numDeCaracteres - 1;
}

function cuentaCaracteresCadadena ($palabra){
    echo "Ingrese la palabra ";
    $palabra = explode("/",trim(fgets(STDIN)));
   
    return ($num = substr_count($palabra[0], $palabra[1]));
}

function cadenasDecaracteres ($palabraA, $palabraB){

    if (strpos($palabraA, $palabraB)){

        $respuesta = true;
    }
    else{
        $respuesta = false;
    }

    return ($respuesta);
}

function longitudCadena ($cadena){

    $arregloDeLaCadena = str_split ($cadena);

    for ($i=0; $i < count($arregloDeLaCadena) ; $i++) { 
        
    }

    return ($i);
}

function conparacionDeCadenas ($cadenaUno, $cadenaDos){



    $longitudCadenaUno = longitudCadena($cadenaUno);
    $longitudCadenaDos = longitudCadena($cadenaDos);

    if ($longitudCadenaUno > $longitudCadenaDos){
        $mayorLongitud = $cadenaUno;
    }else{
        $mayorLongitud = $cadenaDos;
    }

    return ($mayorLongitud);

}




