<?php

include ('Persona.php');
include ('Cuota.php');
include ('Prestamo.php');
include ('Financiera.php');

 $objFinanciera = new Financiera("Money","Av. Arg 1234");

$objPersona1 = new PersonaPrestamo("Pepe","Flores","Bs As 12",38232325,"dir@mail.com","299444567",40000);
$objPersona2 = new PersonaPrestamo("Luis", "Suarez",36841599,"Bs As 123","dir@mail.com","2994455",4000);
$objPersona3 = new PersonaPrestamo("Luis","Suares", "Bs As 123",3851254,"Bs As 123","2994455",40000);

$objPrestamo1 = new Prestamo(1,50000,5,0.1,$objPersona1);
$objPrestamo2 = new Prestamo(2,10000,4,0.1,$objPersona2);
$objPrestamo3 = new Prestamo(3,10000,2,0.1,$objPersona3);

//echo $objFinanciera."\n";
$objFinanciera->incorporarPrestamo($objPrestamo1);
$objFinanciera->incorporarPrestamo($objPrestamo2);
$objFinanciera->incorporarPrestamo($objPrestamo3);

//echo $objFinanciera."\n";

$objFinanciera->otorgarPrestamoSiCalifica();
//echo $objFinanciera;

$objCuota = $objFinanciera->informarCuotaPagar(1);

//echo $objCuota;

$x =  $objCuota->darMontoFinalCuota();
echo $x;

$y = true;
$objCuota->setEstado($y);
echo $objCuota;
$objCuota = $objFinanciera->informarCuotaPagar(1);
echo $objCuota;

//$objFinanciera->informarCuotaPagar(3);
//echo $objFinanciera;