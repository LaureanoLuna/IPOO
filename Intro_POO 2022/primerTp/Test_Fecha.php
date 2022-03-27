<?php
include('fecha.php');

/* $dd = trim(fgets(STDIN));
$mm = trim(fgets(STDIN));
$aa = trim(fgets(STDIN)); */

$p = new Fecha($dd,$mm,$aa); 
//$p->Incremento(10);
//$p->FechaExtendida();
$p->nuevaFecha(2,20,6,94);
echo $p;

