 <?php

include('ViajeFeliz.php');
include('Persona.php');

$per = [new Persona("Laureano","Luna",38232325),new Persona("Josefo","Giacone",26841599),new Persona("Margarita","Muñoz",16589633)];//objeto Persona ya creado

$objViaje = new ViajeFeliz(3543,"Neuquen",3,$per); //Objeto viaje ya creado

//Programa principal

 echo "\n♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀ \n";
echo "\n..............Empresa Viaje Feliz.............\n";
echo "\n♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀ \n";
do {
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    echo "\n1) Ingresar un nuevo viaje \n";
    echo "\n2) Ver los datos del viaje y los Pasajeros \n";
    echo "\n3) Modificar los datos ya generados \n";
    echo "\n4) Guardar los datos del viaje \n";
    echo "\n5)Salir\n";

    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
    $opciones = trim(fgets(STDIN));
switch ($opciones) {
   case '1':
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    echo "\nDestino: ";
    $destino = trim(fgets(STDIN));
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    echo "\nCodigo identificatorio de viaje: ";
    $codViaje = trim(fgets(STDIN));
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    echo "\nCapacidad de pasajeros: ";
    $capacidadViaje = trim(fgets(STDIN));
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    do {
        echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

        echo "\nNombre: ";        
        $nomPasajero = trim(fgets(STDIN));

        echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

        echo "\nApellido: ";        
        $apellidoPasajero = trim(fgets(STDIN));

        echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

        echo "\nNumero de DNI: ";        
        $dniPasajero = trim(fgets(STDIN));

        echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

        $objPersona[]=new Persona($nomPasajero, $apellidoPasajero, $dniPasajero);

        echo "\n¿ Desea Ingresar otro pasajero ?\n";
        $peppol = trim(fgets(STDIN));
    } while ($peppol == "si");

    $objViaje = new ViajeFeliz($codViaje,$destino,$capacidadViaje,$objPersona);
       
       break;
    case '2':
        echo $objViaje;
        echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
        $x = $objViaje->getObjPersona();
        $i = 1;
        foreach ($x as $key => $value) {
            echo $i.")".$value;
            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
            $i++;
        }
        break;
    case '3':           
            do {
                echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                echo "\nQue modificacion desea realizar \n";
                echo "\n1)Agregar mas pasajeros \n";// agrega un objeto Personal al atributo del objeto viaje
                echo "\n2)Modificar los datos de los pasajeros ya ingresados \n";// ingresa a el siguente menu para poder modificar valores especificos del objeto Persona
                echo "\n3)Borrar algun pasajero ya ingresado \n";// borra y reacomoda los elementos del atributo para que no queden huecos
                echo "\n4)Cambiar destino del viaje\n";// settea el atributo setDestino con un valor ingresado por teclado 
                echo "\n5)Cambiar la capacidad del viaje\n";// settea el atributo setCapMaxPers con un valor ingresado por teclado
                echo "\n6)Volver al menu anterior \n";// regresa al menu anterior
                $opc = trim(fgets(STDIN));

                echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                
                
            switch ($opc) {
                case '1':
                   if ($objViaje->estaLLeno()) {
    
                    echo "\nLa capacidad maxima de pasajeros, ya se completo \n";
                       
                   }else{
                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                    echo "\nNombre: ";                    
                    $nomPasajeroNuevo = trim(fgets(STDIN));

                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                    echo "\nApellido: ";                    
                    $apellidoPasajeroNuevo = trim(fgets(STDIN));

                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                    echo "\nNumero de DNI: ";                   
                    $dniPasajeroNuevo = trim(fgets(STDIN));

                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
    
                    $objViaje->AgregrarObjPersona($nomPasajeroNuevo,$apellidoPasajeroNuevo,$dniPasajeroNuevo);

                    echo "\nEl pasajero fue agregado con exito\n";
                   }
    
                   break;
                case '2':       
    
                   do {
                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                    echo "\nDato que desea modificar \n";
                    echo "\n1) Modificar nombre \n";
                    echo "\n2) Modificar apellido \n";
                    echo "\n3) Modificar numero de DNI \n";
                    echo "\n4) Volver al menu anterior\n";
                    
                    $opcModificacion =trim(fgets(STDIN));

                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                      
                    switch ($opcModificacion) {
                        case '1':
                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                            echo "\nIndique el numero del pasajero ";                            
                            $numPasajero =trim(fgets(STDIN));

                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                            echo "\nIngrese el nuevo nombre ";                            
                            $nuevoNombre = trim(fgets(STDIN));

                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
    
                            if($objViaje->ModificarNombre($nuevoNombre,$numPasajero - 1)){

                                echo "\n La modificacion se realiazo con exito\n";
                            }
                            
                                                   
                            break;
                        case '2':
                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                            echo "\nIndique el numero del pasajero ";                            
                            $numPasajero =trim(fgets(STDIN));

                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                            echo "\nIngrese el nuevo apellido ";                           
                            $nuevoApellido = trim(fgets(STDIN));

                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                            
                            if($objViaje->ModificarApellido($nuevoApellido, $numPasajero - 1)){
                                echo "\n La modificacion se realiazo con exito\n";
                            }
                            
                           
                            break;
                        case '3':
                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                            echo "\nIndique el numero del pasajero \n";                            
                            $numPasajero =trim(fgets(STDIN));

                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                            echo "\nIngrese el nuevo numero de DNI \n";                            
                            $nuevoDNI = trim(fgets(STDIN));

                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
    
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
                    
                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                    
                    echo "\nIndique la ubicacion del pasajero   ";                    
                    $ubicacionPasajero =(trim(fgets(STDIN)) - 1);
                    
                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                    
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
                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                    
                    echo "\nIngrese el nuevo destino del viaje  ";                   
                    $nuevoDestino = trim(fgets(STDIN));

                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                    
                    $objViaje->setDestino($nuevoDestino);

                    break;
                    
                case '5':
                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                    
                    echo "\nIngrese la nueva capacidad de pasajeros del viaje ";                    
                    $nuevaCapacidad = trim(fgets(STDIN));
                    
                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

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
    case '4':/**idea mia esta opcion del menu,
         el cual por medio de unas confimaciones del usuario el objeto viaje se guardan en un arreglo multidimencional
          con la clave del codigo de viaje*/
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



print_r($archivoViajes); 

