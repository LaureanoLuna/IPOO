<?php
include ('Cafetera.php');

/* $objCafetera = new Cafetera(100, 250);
/*  $objCafetera->AgregarCafe(100);*/
//$objCafetera->servirTaza(150); */

$objCafetera2 = new Cafetera(250,300);

$objCafetera2->AgregarCafe(25);

$objCafetera2->servirTaza(300);

$objCafetera2->llenarCafetera();




?>