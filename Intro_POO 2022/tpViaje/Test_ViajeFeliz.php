 <?php

include('ViajeFeliz.php');
include('Persona.php');

$per = [new Persona("Laureano","Luna",38232325),new Persona("Antonella","Giacone",36841599),new Persona("Margarita","Muñoz",16589633)];

$objViaje2 = new ViajeFeliz(3543,"Neuquen",3,$per);
//$x = $objViaje2->getObjPersona();

 echo "\n♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀ \n";
echo "\n..............Empresa Viaje Feliz.............\n";
echo "\n♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀ \n";
do {
    echo "\n1) Ingresar un nuevo viaje \n";
    echo "\n2) Ver los datos del viaje y los Pasajeros \n";
    echo "\n3) Modificar los datos ya generados \n";
    echo "\n4) Guardar los datos del viaje \n";
    echo "\n5)Salir\n";
    $opciones = trim(fgets(STDIN));
switch ($opciones) {
   case '1':
    echo "\nDestino: ";
    $destino = trim(fgets(STDIN));
    echo "\nCodigo identificatorio de viaje: ";
    $codViaje = trim(fgets(STDIN));
    echo "\nCapacidad de pasajeros: ";
    $capacidadViaje = trim(fgets(STDIN));

    do {
        echo "\nNombre: ";
        $nomPasajero = trim(fgets(STDIN));
        echo "\nApellido: ";
        $apellidoPasajero = trim(fgets(STDIN));
        echo "\nNumero de DNI: ";
        $dniPasajero = trim(fgets(STDIN));

        $objPersona[]=new Persona($nomPasajero, $apellidoPasajero, $dniPasajero);

        echo "\n¿ Desea Ingresar otro pasajero ?\n";
        $peppol = trim(fgets(STDIN));
    } while ($peppol == "si");

    $objViaje = new ViajeFeliz($codViaje,$destino,$capacidadViaje,$objPersona);
       
       break;
    case '2':
        echo $objViaje;
        $x = $objViaje->getObjPersona();
        $i = 1;
        foreach ($x as $key => $value) {
            echo $i.")".$value;
            $i++;
        }
        break;
    case '3':           
            do {
                echo "\nQue modificacion desea realizar \n";
                echo "\n1)Agregar mas pasajeros \n";
                echo "\n2)Modificar los datos de los pasajeros ya ingresados \n";
                echo "\n3)Borrar algun pasajero ya ingresado \n";
                echo "\n4)Cambiar destino del viaje\n";
                echo "\n5)Cambiar la capacidad del viaje\n";
                echo "\n6)Volver al menu anterior \n";
                $opc = trim(fgets(STDIN));
        
            switch ($opc) {
                case '1':
                   if ($objViaje->estaLLeno()) {
    
                    echo "\nLa capacidad maxima de pasajeros, ya se completo \n";
                       
                   }else{
                    echo "\nNombre: ";
                    $nomPasajeroNuevo = trim(fgets(STDIN));
                    echo "\nApellido: ";
                    $apellidoPasajeroNuevo = trim(fgets(STDIN));
                    echo "\nNumero de DNI: ";
                    $dniPasajeroNuevo = trim(fgets(STDIN));
    
                    $objViaje->AgregrarObjPersona($nomPasajeroNuevo,$apellidoPasajeroNuevo,$dniPasajeroNuevo);

                    echo "\nEl pasajero fue agregado con exito\n";
                   }
    
                   break;
                case '2':       
    
                   do {
                    echo "\nDato que desea modificar \n";
                    echo "\n1) Modificar nombre \n";
                    echo "\n2) Modificar apellido \n";
                    echo "\n3) Modificar numero de DNI \n";
                    echo "\n4) Volver al menu anterior\n";
                    $opcModificacion =trim(fgets(STDIN));
                      
                    switch ($opcModificacion) {
                        case '1':
                            echo "\nIndique el numero del pasajero ";
                            $numPasajero =trim(fgets(STDIN));
                            echo "\nIngrese el nuevo nombre ";
                            $nuevoNombre = trim(fgets(STDIN));
    
                            if($objViaje->ModificarNombre($nuevoNombre,$numPasajero - 1)){

                                echo "\n La modificacion se realiazo con exito\n";
                            }
                            
                                                   
                            break;
                        case '2':
                            echo "\nIndique el numero del pasajero ";
                            $numPasajero =trim(fgets(STDIN));
                            echo "\nIngrese el nuevo apellido ";
                            $nuevoApellido = trim(fgets(STDIN));
                            
                            if($objViaje->ModificarApellido($nuevoApellido, $numPasajero - 1)){
                                echo "\n La modificacion se realiazo con exito\n";
                            }
                            
                           
                            break;
                        case '3':
                            echo "\nIndique el numero del pasajero \n";
                            $numPasajero =trim(fgets(STDIN));
                            echo "\nIngrese el nuevo numero de DNI \n";
                            $nuevoDNI = trim(fgets(STDIN));
    
                            if($objViaje->ModificarDNI($nuevoDNI,$numPasajero - 1)){
                                echo "\n La modificacion se realiazo con exito\n";
                            }
                                   
                            break;
                        
                        case '4':
                            $opcModificacion = 4;;
                            break;
                            
                            
                        default:
                            echo "\nIngrese una opcion correcta\n";
                            break;
                    }
                   } while ($opcModificacion < 4);
                   
                   break;
                case '3':
                   if (count($objViaje->getObjPersona()) > 0){
                    echo "\nIndique la ubicacion del pasajero \n";
                    $ubicacionPasajero =(trim(fgets(STDIN)) - 1);
                    if ($ubicacionPasajero <= count($objViaje->getObjPersona())){

                        $objViaje->BorrarPasajero($ubicacionPasajero);

                        echo "\nSe elimino correctamente\n";

                    }else{
                        echo "\nNo se ingresaron esa cantidad de Pasajeros\n";
                    }
                   
                   }else{
                       echo "\nNo hay datos pasajeros ingresados\n";
                   }
                   break;
                case '4':
                    echo "\nIngrese el nuevo destino del viaje \n";
                    $nuevoDestino = trim(fgets(STDIN));
                    
                    $objViaje->setDestino($nuevoDestino);

                    break;
                    
                case '5':
                    echo "\nIngrese la nueva capacidad de pasajeros del viaje\n";
                    $nuevaCapacidad = trim(fgets(STDIN));

                    $objViaje->setCantMaxPers($nuevaCapacidad);

                    break;
                
                    case '6':
                        $opc = 6;
                        break;
                   
                default:
                   echo "\n Ingrese una opcion valida \n";
                    break;
                
            }
           } while ($opc < 6 );
    
        break;
    case '4':
        echo "\nLos datos ingresados son los correctos\n";
        $decicion = trim(fgets(STDIN));
        if ($decicion == "si"){
            echo "\nDesea guardar los datos en el archivo\n";
            $desicion = trim(fgets(STDIN));
            if ($desicion == "si") {
                $cod = $objViaje->getCodigo();
                $archivoViajes[$cod] = $objViaje;

                echo "\nLos datos fueron guardados\n";
            }
        }
        break;
    case '5':
        $opciones = 5;
        break;
    default:
       echo "\nIngrese una opcion correcta del menu\n";
        break;
}
} while ($opciones < 5);

$archivoViajes[$objViaje2->getCodigo()] = $objViaje2;

print_r($archivoViajes);