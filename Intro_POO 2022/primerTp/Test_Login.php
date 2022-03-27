<?php

include ('Login.php');

$objLogin = new Login("Laureano", "panchita", "me gusta la programacion");

$objLogin->Recordar("Laureano");
$objLogin->CambiarPassword("Harry");
echo $objLogin;
?>