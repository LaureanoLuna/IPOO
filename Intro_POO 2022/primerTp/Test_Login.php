<?php

include ('Login.php');

$objLogin = new Login("Laureano", "panchita", "me gusta la programacion");
echo $objLogin;
echo "\n--------\n";
$objLogin->Recordar("Laureano");
echo "\n--------\n";
$objLogin->CambiarPassword("Harry");
echo "\n--------\n";
echo $objLogin;
?>