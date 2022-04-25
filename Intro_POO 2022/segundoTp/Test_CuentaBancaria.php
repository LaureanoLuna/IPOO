<?php

include('CuentaBancaria.php');
include('../segundoTp/Persona.php');
$n=["nombre"=>"Laureano","apellido"=>"Luna"];
$d=["tipoDNI"=>"DNI","numeroDNI"=>38232325];

$objPersona = new Persona($n, $d);

$objCuenta = new CuentaBancaria(3543,$objPersona,50000,20);

//echo $objCuenta;
$objCuenta->ActualizarSaldo();
$objCuenta->Depositar(15000);
echo $objCuenta;
$objCuenta->Retirar(65000);
echo $objCuenta;
?>