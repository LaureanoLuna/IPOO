<?php

include ('Disquera.php');
include ('Persona.php');

$persona= ["nombre"=>"Laureano","apellido"=>"Luna"];
$dniPersona= ["tipoDNI"=>"DNI","numeroDNI"=>38232325];

$objPersona = new Persona($persona,$dniPersona);

$objDisquera = new Disquera("Nahuel 696", $objPersona);

//echo $objDisquera;
$objDisquera->abrirDisquera(8,30);
if ($objDisquera->dentroHorarioAtencion(10,30))
{
    echo "\n esta \n". $objDisquera->getEstado()."\n";
}

if($objDisquera->abrirDisquera(22,0)){

    echo "\nAbrio\n";
}
else{
    $objDisquera->cerrarDisquera(20,0);
    echo "\nEsta cerrado\n";
}
//print_r($objDisquera);

//$objDisquera->cerrarDisquera(20,0);
