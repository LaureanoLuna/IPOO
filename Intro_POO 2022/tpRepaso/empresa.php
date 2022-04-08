<?php

/* 1. Dada una estructura de arreglos asociativos, donde cada posición almacena un arreglo con la cantidad
recaudada (en pesos) y costo total (en pesos), en el que cada mes del año se corresponde con la posición del
arreglo dentro del otro arreglo; implementar un algoritmo que calcule cuál fue el mes que arrojó mayor
ganancia.  */

$balancesEmpresa = ["RECAUDACION" => 0 ,"COSTOS" => 0];
$arregloEmpresa[0] = ["MES" => "Enero","BALANCE" =>["RECAUDACION"=> 5000,"COSTOS"=> 300]];
$arregloEmpresa[1] = ["MES" => "Febrero","BALANCE" =>["RECAUDACION"=> 4500,"COSTOS"=> 1000]];
$arregloEmpresa[2] = ["MES" => "Marzo","BALANCE" =>["RECAUDACION"=> 3000,"COSTOS"=> 2000]];
$arregloEmpresa[3] = ["MES" => "Abril","BALANCE" =>["RECAUDACION"=> 15000,"COSTOS"=> 8000]];
$arregloEmpresa[4] = ["MES" => "Mayo ","BALANCE" =>["RECAUDACION"=> 1000,"COSTOS"=> 300]];


function balanceMesMayorGanancia ($arreglo){
    
    $gananciaMayor = 0;
    $mesMasGanados = " ";
    for ($i=0; $i < count($arreglo) ; $i++) { 
        if ($arreglo[$i]["BALANCE"]["RECAUDACION"] - $arreglo[$i]["BALANCE"]["COSTOS"] > $gananciaMayor ){
            $gananciaMayor = $arreglo[$i]["BALANCE"]["RECAUDACION"] - $arreglo[$i]["BALANCE"]["COSTOS"];
            $mesMasGanados = $arreglo[$i]["MES"];
        }
    }
    return ($mesMasGanados);
    
}

/* Dada una estructura de arreglos asociativos, donde cada arreglo se corresponde a la información del empleado
de una empresa ( nombre completo, sueldo básico, antigüedad) , retornar un arreglo con el nombre de cada
empleado y su sueldo a cobrar. El sueldo se calcula adicionando al sueldo básico el 50 % si la antigüedad
supera los 10 años y el 25 % en caso contrario.  */

function sueldosEmpleados ($arreglo){

    for ($i=0; $i < count($arreglo) ; $i++) { 
        $empleado = [];

        if ($arreglo["antiguedad"] > 10){

            $empleado["nombre"] = $arreglo["nombre"]; 
            $empleado["sueldoCobrar"] = $arreglo["sueldoBasico"] + (($arreglo["sueldoBasico"] * 50) / 100);   
        }else{

            $empleado["nombre"] = $arreglo["nombre"];
            $empleado["sueldoCobrar"] = $arreglo["sueldoBasico"] + (($arreglo["sueldoBasico"] * 25) / 100);
        }
        
    }

    return ($empleado);
}

