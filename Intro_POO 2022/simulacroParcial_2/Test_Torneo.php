<?php
include ('Categoria.php');
include ('Equipo.php');
include ('Partido.php');
include ('Futbol.php');
include ('Basquer.php');
include ('Torneo.php');

$objCategoria1 = new Categoria(1, "Menores");
$objCategoria2 = new Categoria(2, "Juveniles");
$objCategoria3 = new Categoria(3, "Mayores");

$objEquipo1 = new Equipo("Boca", "Julio",22, $objCategoria1);
$objEquipo2 = new Equipo("River", "Pedro",22, $objCategoria1);

$objEquipo3 = new Equipo("Huracan", "Luis",22, $objCategoria2);
$objEquipo4 = new Equipo("Banfiel", "Jorge",22, $objCategoria2);

$objEquipo5 = new Equipo("San Lorenzo", "Luna",22, $objCategoria3);
$objEquipo6 = new Equipo("Argentinos", "Marcos",22, $objCategoria3);


$objPart1 = new Basquet(1,'2020-10-10',$objEquipo1 ,$objEquipo2,80,120,75);
$objPart2 = new Basquet(2,'2020-10-25',$objEquipo3 ,$objEquipo4,81,110,70);
$objPart3 = new Basquet(3,'2020-11-25',$objEquipo5 ,$objEquipo6,115,85,110);
$objPart4 = new Futbol(1,"22/06/1994",$objEquipo1, $objEquipo2,3,2);
$objPart5 = new Futbol(2,"22/06/1995",$objEquipo3,$objEquipo4,0,1);
$objPart6 = new Futbol(3,"30-11-2020",$objEquipo5,$objEquipo6,3,2);
$coleccionObj = [$objPart1,$objPart2,$objPart3,$objPart4,$objPart5,$objPart6,];
$objTorneo = new Torneo(100000, $coleccionObj);

//echo $objTorneo;

$colec = $objTorneo->darGanadores("Basquet");

//StringColecc($colec);

$colecFutbol = $objTorneo->darGanadores("Futbol");

//StringColecc($colecFutbol);

$premio = $objTorneo->calcularPremioPartido($objPart6);

StringColecc($premio);

function StringColecc($arreglo)
{
    foreach ($arreglo as $key => $value) {
        echo "----------------\n". $value. "\n-----------------";
    }
}
?>