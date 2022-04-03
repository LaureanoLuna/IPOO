 <?php

include('ViajeFeliz.php');
include('Persona.php');

$per = [new Persona("Laureano","Luna",38232325),new Persona("Antonella","Giacone",36841599),new Persona("Margarita","Muñoz",16589633)];

$objViaje = new ViajeFeliz(3543,"Neuquen",20,$per);
$x = $objViaje->getPasajeros();

 
/*  $objViaje->ModificarNombre("Oscar","Margarita");
print_r($objViaje->getPasajeros());
$objViaje->AgregrarPasajeros("Pablo","Sosa",25596365);
print_r($objViaje->getPasajeros());
 $objViaje->AgregrarPasajeros("Pablo","Sosa",25596365);
;
print_r($objViaje);
 
//print_r($objViaje);
//$objViaje -> BorrarPasajero(1);
$objViaje->AgregrarPasajeros("Pepe","sosa",23156365);

$objViaje->ModificarDNI(25165897,3);
$objViaje->ModificarNombre("Oscar",1);
$objViaje->ModificarApellido("Perez",2);
print_r($objViaje);
//print_r($objViaje->Reordenamiento()); */

echo "\n♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀ \n";
echo "\n..............Empresa Viaje Feliz.............\n";
echo "\n♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀ \n";
do {
    $opciones = trim(fgets(STDIN));
switch ($opciones) {
    case '1 ':
        echo "Que modificacion desea realizar \n";
        echo "1)Agregar mas pasajeros \n";
        echo "2)Modificar los datos de los pasajeros ya ingresados \n";
        echo "3) Borrar algun pasajero ya ingresado \n";
        $opc = trim(fgets(STDIN));

        $opcionMenu = 0;
       do {
        switch ($opc) {
            case '1':
                echo "Nombre ";
                $nomPasajeroNuevo = trim(fgets(STDIN));
                echo "Apellido ";
                $apellidoPasajeroNuevo = trim(fgets(STDIN));
                echo "Numero de DNI ";
                $dniPasajeroNuevo = trim(fgets(STDIN));

                $objViaje->AgregrarPasajeros($nomPasajeroNuevo,$apellidoPasajeroNuevo,$dniPasajeroNuevo);

                $opcionMenu = 4;
                break;
            case '2':
                echo "Dato que desea modificar \n";
                echo "1) Modificar nombre \n";
                echo "2) Modificar apellido \n";
                echo "3) Modificar numero de DNI \n";
                $opcModificacion =trim(fgets(STDIN));

               do {
                   $desision = "si";
                switch ($opcModificacion) {
                    case '1':
                        echo "Indique el numero del pasajero ";
                        $numPasajero =trim(fgets(STDIN));
                        echo "Ingrese el nuevo nombre ";
                        $nuevoNombre = trim(fgets(STDIN));

                        $objViaje->ModificarNombre($nuevoNombre,$numPasajero);
                        echo "Desea realizar otra modificacion \n";
                        $desision =trim(fgets(STDIN));                        
                        break;
                    case '2':
                        echo "Indique el numero del pasajero ";
                        $numPasajero =trim(fgets(STDIN));
                        echo "Ingrese el nuevo apellido ";
                        $nuevoApellido = trim(fgets(STDIN));
                        
                        $objViaje->ModificarApellido($nuevoApellido, $numPasajero);
                        echo "Desea realizar otra modificacion \n";
                        $desision =trim(fgets(STDIN));
                        break;
                    case '3':
                        echo "Indique el numero del pasajero ";
                        $numPasajero =trim(fgets(STDIN));
                        echo "Ingrese el nuevo numero de DNI ";
                        $nuevoDNI = trim(fgets(STDIN));

                        $objViaje->ModificarDNI($nuevoDNI,$numPasajero);
                        echo "Desea realizar otra modificacion \n";
                        $desision =trim(fgets(STDIN));
                        break;

                        
                        
                    default:
                        # code...
                        break;
                }
               } while ($desision != "no");
               $opcionMenu = 4;
               break;
            case '3':
                echo "Indique la ubicacion del pasajero \n";
                $ubicacionPasajero = trim(fgets(STDIN));

                $objViaje->BorrarPasajero($ubicacionPasajero);
                $opcionMenu = 4;
            default:
                # code...
                break;
            
        }
       } while ($opcionMenu < 4 );
        
        break;
    case '2':
        echo $objViaje;
        $x = $objViaje->getPasajeros();
        foreach ($x as $key => $value) {
            echo $value;
        }
        break;
    default:
        # code...
        break;
}
} while ($opciones < 4);