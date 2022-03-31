<?php

include ('Persona.php');

$persona= ["nombre"=>"Laureano","apellido"=>"Luna"];
$dniPersona= ["tipoDNI"=>"DNI","numeroDNI"=>38232325];

$objPersona = new Persona($persona,$dniPersona);

echo $objPersona;

?>