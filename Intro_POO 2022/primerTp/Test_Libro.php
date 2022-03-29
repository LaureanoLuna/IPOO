<?php

include('Libro.php');

$objLibro = new Libro(35,"Harry Potter",2001,"Santillana","J.K Rowling");
if ($objLibro->perteneceEditorial("Santillana")){
    echo "\n Pertenece \n";
}
echo "\nSe edito hace ".$objLibro->aniosdesdeEdicion()."\n";
$objLibro2 = new Libro(40,"Sherek",2014,"Castellana","Pepe");
if ($objLibro2->perteneceEditorial("Santillana")){
    echo "\n Pertenece \n";
}else{ echo "\n No pertenece a esa editorial \n";}
echo "\nSe edito hace ".$objLibro2->aniosdesdeEdicion()."\n";
$objLibro3= new Libro(60,"El Señor de los Anillos", 2004,"Santillana","Josefa");
if ($objLibro3->perteneceEditorial("Santillana")){
    echo "\n Pertenece \n";
}else{ echo "\n No pertenece a esa editorial \n";}
echo "\nSe edito hace ".$objLibro3->aniosdesdeEdicion()."\n";


 function iguales($pLibro, $arrayLibro){

    foreach ($arrayLibro as $key => $value) {
        if ($arrayLibro[$key]->gettituloLibro() == $pLibro) {
           $x = true;
        }
       
    }
    if ($x){
        echo "\nEl libro ".$pLibro. " ya se encuentra en la coleccion \n";
    }else{
        echo "\nEl libro ".$pLibro. " no se encuentra en la coleccion \n";
    }
 }

 function  librodeEditoriales($arreglolibros, $peditorial)
 {
     $arregloEditorial=[];
     foreach ($arreglolibros as $key => $value) {
         if ($arreglolibros[$key]->getnomEditorial() == $peditorial){
             $arregloEditorial[$peditorial][]=$value->gettituloLibro();
         }
     }

     return $arregloEditorial;
 }

 

 $pBook = [$objLibro,$objLibro2,$objLibro3];
 
echo(iguales("Harry Potter",$pBook));

print_r(librodeEditoriales($pBook,"Santillana"));
 //print_r(librodeEditoriales($pBook,"Salamandra"));

 