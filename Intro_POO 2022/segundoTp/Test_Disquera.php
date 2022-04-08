<?php

include ('Disquera.php');
include ('Persona.php');

$persona= ["nombre"=>"Laureano","apellido"=>"Luna"];
$dniPersona= ["tipoDNI"=>"DNI","numeroDNI"=>38232325];

$objPersona = new Persona($persona,$dniPersona);

$objDisquera = new Disquera("Nahuel 696", $objPersona);

echo $objDisquera;

if ($objDisquera->dentroHorarioAtencion(10,30))
{
    echo "\n esta \n". $objDisquera->getEstado();
}

//$objDisquera->abrirDisquera(22,0);
//print_r($objDisquera);
$objDisquera->abrirDisquera(8,30);
$objDisquera->cerrarDisquera(20,0);
