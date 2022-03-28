<?php

include('CuentaBancaria.php');

$objCuenta = new CuentaBancaria(3543,38232325,50000,20);

//echo $objCuenta;
$objCuenta->ActualizarSaldo();
$objCuenta->Depositar(15000);
//echo $objCuenta;
$objCuenta->Retirar(65000);
?>