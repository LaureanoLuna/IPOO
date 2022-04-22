 <?php

include('Persona.php');
include('ResponsableV.php');
include('ViajeFeliz.php');



$per = [new Persona("Laureano","Luna",38232325, 15),new Persona("Josefo","Giacone",26841599,16),new Persona("Margarita","Muñoz",16589633,17)];//objeto Persona ya creado
//$objResponsable = new ResponsableV(56,"FAI-3543", "Laureano","Luna");

$objViaje = new ViajeFeliz(3543,"Neuquen",3,$per); //Objeto viaje ya creado
$objViaje->AgregarResponsable(56,"FAI-3543", "Laureano","Luna");
$i = 0;
//Programa principal

 echo "\n♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀ \n";
echo "\n..............Empresa Viaje Feliz.............\n";
echo "\n♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀♂ ♀ \n";
do {
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    echo "\n1) Ingresar un nuevo viaje \n";// Inicializamos un nuevo objeto Persona y ViajeFeliz 
    echo "\n2) Ver los datos del viaje y los Pasajeros \n";// una ves el objeto creado se pueden visualizar sus datos
    echo "\n3) Modificar los datos ya generados \n";// en esta opvion se puede tener acceso a todos los atributos para settearlos
    echo "\n4) Guardar los datos del viaje \n";// guarda el objeto Viaje Feliz en un arreglo con una clave que es el atributo codigo de viaje
    echo "\n5) Ver los viajes ya guardados \n";// visualizamos los datos de los objetos ViajeFeliz ya creados y guardados
    echo "\n6) Salir\n";

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

    echo "\nDatos del Empleado Resposanble del Viaje \n";
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
    echo "\nNombre: ";
    $nomEmpleado = trim(fgets(STDIN));
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    echo "\nApellido: ";
    $apellidoEmpleado = trim(fgets(STDIN));
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    echo "\nNumero Identificatorio del Empleado Responsable: ";
    $idEmpleado = trim(fgets(STDIN));
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    echo "\nNumero de Legajo del Empleado Responsable: ";
    $numLegajo = trim(fgets(STDIN));
    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

    

    $p = 0;

    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
    echo "\nIngresar los datos de los Pasajeros\n";

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

        echo "\nNumero de Telefono: ";        
        $numTelefono = trim(fgets(STDIN));

        echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

        $objPersona[$p]=new Persona($nomPasajero, $apellidoPasajero, $dniPasajero, $numTelefono);

        echo "\n¿ Desea Ingresar otro pasajero ?\n";
        $peppol = trim(fgets(STDIN));
        $p++;

        if (count($objPersona) == $capacidadViaje){

            echo "\nya se lleno el cupo de viajes \n";
            $peppol = "no";

        }

        
    } while ($peppol == "si");

    $objViaje = new ViajeFeliz($codViaje,$destino,$capacidadViaje,$objPersona);
    $objViaje->AgregarResponsable($idEmpleado,$numLegajo,$nomEmpleado,$apellidoEmpleado);
       
       break;
    case '2':
        echo $objViaje;
        print_r($objViaje);
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
                echo "\n4)Modificar los datos del responsable del viaje.\n";
                echo "\n5)Cambiar destino del viaje \n";// settea el atributo setDestino con un valor ingresado por teclado 
                echo "\n6)Cambiar la capacidad del viaje \n";// settea el atributo setCapMaxPers con un valor ingresado por teclado
                echo "\n7)Volver al menu anterior \n";// regresa al menu anterior
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

                    echo "\nNumero de Telefono: ";                   
                    $numPasajeroTelefono = trim(fgets(STDIN));

                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
    
                    $objViaje->AgregrarObjPersona($nomPasajeroNuevo,$apellidoPasajeroNuevo,$dniPasajeroNuevo, $numPasajeroTelefono);

                    echo "\nEl pasajero fue agregado con exito\n";
                   }
    
                   break;
                case '2':       
    
                   do {
                       if (count($objViaje->getObjPersona()) <> null)
                            {
                                echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                                echo "\nDato que desea modificar \n";
                                echo "\n1) Modificar nombre \n";//Permite settear el atributo con la clave correspondiente al nombre del objeto
                                echo "\n2) Modificar apellido \n";//Permite settear el atributo con la clave correspondiente al apellido del objeto
                                echo "\n3) Modificar numero de DNI \n";//Permite settear el atributo con la clave correspondiente al DNI del objeto
                                echo "\n4) Modificar numero de DNI \n";//Permite settear el atributo con la clave correspondiente al Numero de telefono del objeto
                                $opcModificacion =trim(fgets(STDIN));
                                if ($opcModificacion < 5)
                                 {   
                                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                                    echo "\nIndique el numero del pasajero ";                            
                                    $numPasajero =trim(fgets(STDIN));

                                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                                    echo "\nIngrese el nuevo dato\n";                            
                                    $nuevoDato = trim(fgets(STDIN));

                                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                                    if ($objViaje->ModificarDatos($opcModificacion,$numPasajero-1,$nuevoDato))
                                    {

                                        echo "\n La modificacion se realizo con exito\n";
                                        print_r($objViaje->getObjPersona());
                                                                        
                                    }else{
                                             echo "No se pudo realizar la modificacion";
                                         }
                                }else{
                                    echo "\nIngrese una opcion valida\n";
                                    
                                }
                                    
                                    echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                            
                            }else{

                                echo "No hay Pasajeros ingresados para el viaje";
                                    }
                                  
                        
                            $opcModificacion = 5;

                            /* $objViaje->getObjPersona() */
                        
                        
                      
                    /* switch ($opcModificacion) {
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
                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                            echo "\nIndique el numero del pasajero \n";                            
                            $numPasajero =trim(fgets(STDIN));

                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";

                            echo "\nIngrese el nuevo numero de DNI \n";                            
                            $nuevoPhonePasajero = trim(fgets(STDIN));

                            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
    
                            if($objViaje->ModificarDNI($nuevoPhonePasajero,$numPasajero - 1)){
                                echo "\n La modificacion se realiazo con exito\n";
                            }
                            break;
                            
                            
                        default:
                            echo "\nIngrese una opcion correcta\n";
                            break; */
                    
                   } while ($opcModificacion < 5);
                   
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
                
                    case '7':
                        $opc = 7;
                        break;
                   
                default:
                   echo "\n Ingrese una opcion valida \n";
                    break;
                
            }
           } while ($opc < 7 );
    
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
                $archivoViajes[$i] = $objViaje;
                $i++;

                echo "\nLos datos fueron guardados\n";
            }
        }
        break;
    case '5': //visualizamos los objetos ViajesFeliz guardados en un arreglo multidimencional
        foreach ($archivoViajes as $key => $value) {
            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
            echo $value;
            $x = $value->getObjPersona();
            $i = 1;
            foreach ($x as $key => $value) {
                echo $i.")".$value;
                echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
                $i++;
            }
            echo "\n○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•○•\n";
        }
        break;
    case '6':
        $opciones = 6;
    default:
       echo "\nIngrese una opcion correcta del menu\n";
        break;
}
} while ($opciones < 6);


function VerificacionDeDatos($opcionElegida)
{
    if ($opcionElegida == 1){

        $opc = "nombre";
    }elseif ($opcionElegida == 2){

        $opc = "apellido";
    }elseif ($opcionElegida == 3){

        $opc = "DNI";
    }else{

        $opc = "Telefono";
    }

    return $opc;

    
}



//print_r($archivoViajes); 

