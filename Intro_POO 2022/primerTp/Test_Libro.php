<?php
include ('Persona.php');
include('Libro.php');

$sinopLibro = "La tragedia de Hamlet, Príncipe de Dinamarca cuenta la historia del joven heredero al trono danés,
             cuyo padre muerto se le aparece como un fantasma en las murallas del castillo,
             para invocar su venganza, pues su muerte no fue natural sino que fue envenenado por su propia esposa Gertrudis,
             madre de Hamlet, y su hermano y actual rey, Claudio.

                El joven Hamlet, 
temiendo haber enloquecido, se decide a comprobar si es cierto lo que dice el fantasma. Organiza entonces una representación teatral con una compañía de actores, en la que escenifican la muerte de su padre tal cual ocurrió. Hamlet vigila la reacción de los reyes y encuentra en la indignación de su tío Claudio la evidencia de su culpabilidad.

Pero aunque ahora esté decidido a vengarse, Hamlet duda cuando se le presenta la oportunidad de asesinar a su tío y acaba comportándose como un loco, sin que nadie sepa si realmente ha perdido el juicio o si se trata de una estrategia para pasar desapercibido.

Así, se cuela una noche en la habitación de su madre, dispuesto a confrontarla y hacerla confesar, y creyendo que el rey Claudio los espía detrás de una cortina, desenvaina su espada y asesina a Polonio, el chambelán del reino y padre de Ofelia, su prometida. Esta última, desesperada de dolor, creyendo haber perdido no solo a su padre sino también el amor de su príncipe delirante, se suicida.

El Rey Claudio entonces idea un plan para deshacerse de Hamlet y lo envía a Inglaterra en compañía de dos de sus hombres más fieles: Rosencrantz y Guildenstern, para ser asesinado. Pero los piratas asaltan el barco en que navegan y liberan al príncipe, quien vuelve al reino a tiempo para ser retado a un duelo por Laertes, hermano de Ofelia, quien ha llegado del extranjero recientemente.

Para asegurarse la muerte de Hamlet, el rey Claudio envenena la punta de la espada de Laertes, y es entonces cuando todo sale mal: Laertes y Hamlet se hieren mortalmente el uno al otro, y en la desesperación del combate, la reina Gertrudis toma también de una copa envenenada. El plan del rey Claudio se ve expuesto de esa manera y Hamlet finalmente se anima a darle muerte, vengando a su padre en sus últimos instantes de vida. El relato culmina con la llegada de Fortimbrás, príncipe de Noruega, quien se hace con el trono ahora vacante.
 ";

$objPersona= new Persona("Laureano", "Luna", "38232325");

$objLibro = new Libro(35,"Harry Potter",2001,"Santillana",$objPersona,538,$sinopLibro);
if ($objLibro->perteneceEditorial("Santillana")){
    echo "\n Pertenece \n";
}
echo "\nSe edito hace ".$objLibro->aniosdesdeEdicion()."\n";
/* $objLibro2 = new Libro(40,"Sherek",2014,"Castellana","Pepe");
if ($objLibro2->perteneceEditorial("Santillana")){
    echo "\n Pertenece \n";
}else{ echo "\n No pertenece a esa editorial \n";}
echo "\nSe edito hace ".$objLibro2->aniosdesdeEdicion()."\n";
$objLibro3= new Libro(60,"El Señor de los Anillos", 2004,"Santillana","Josefa");
if ($objLibro3->perteneceEditorial("Santillana")){
    echo "\n Pertenece \n";
}else{ echo "\n No pertenece a esa editorial \n";}
echo "\nSe edito hace ".$objLibro3->aniosdesdeEdicion()."\n" */;


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

 