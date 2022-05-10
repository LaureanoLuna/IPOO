<?php

include('PersonaH.php');
include('Cliente.php');

$objCliente []= new Cliente("Laureano","Luna","38232325",5);

$objCliente[] = new Cliente("Anto","Giancone", "36841599", 10);

foreach ($objCliente as $key) {
     echo $key."\n";
}
?>