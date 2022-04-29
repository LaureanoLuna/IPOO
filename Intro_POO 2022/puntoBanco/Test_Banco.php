<?php

include('Tramite.php');
include('PersonaT.php');
include('Mostrador.php');
include('Banco.php');
$temires = ["Pension","AUH","Conducir"];
$objPersona = [new PersonaT("Laureano","Luna","38232325",new Tramite("Pension")), new PersonaT("anto", "gia","35555",new Tramite("Pension"))];
$objMostrador = new Mostrador(1,$temires);
$objMostrador->setPersEnCola($objPersona);

$objBanco = new Banco("Nacion",$objMostrador,$objPersona);


echo $objBanco;



