<?php
/* La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino,
 cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (incluso los datos de los pasajeros).
 Utilice un array que almacene la información correspondiente a los pasajeros. Cada pasajero es un array asociativo con las claves “DNI”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos. */

class ViajeFelizModificado{

    /**Atributos de la clase viaje */
    private $codigo;
    private $destino;
    private $cantMaxPers;
    private $objPasajero = [];

    // Metodo contructor del objeto ViajeFelis
    public function __construct($codViaje, $lugarDestino, $limitPers)
    {
        $this->codigo = $codViaje;
        $this->destino = $lugarDestino;
        $this->cantMaxPers = $limitPers;
        $this->ObjPasajero;
        
    }
    
        // Implementamos los metodos de acceso a los atributos
    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of destino
     */ 
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     *
     * @return  self
     */ 
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get the value of cantMaxPers
     */ 
    public function getCantMaxPers()
    {
        return $this->cantMaxPers;
    }

    /**
     * Set the value of cantMaxPers
     *
     * @return  self
     */ 
    public function setCantMaxPers($cantMaxPers)
    {
        $this->cantMaxPers = $cantMaxPers;

        return $this;
    }

    /**
     * Get the value of pasajeros
     */ 
    public function getObjPasajero()
    {
        return $this->ObjPasajero;
    }

    /**
     * Set the value of ObjPasajero
     *
     * @return  self
     */ 
    public function setObjPasajero($objPasajero)
    {
        $this->ObjPasajero = $objPasajero;

        return $this;
    }

    /**
     * Metodo que nos retorna si la capacidad maxima de pasajeros ya llego a su limite
     * 
     * @return booleano $bool.
     */

    public function estaLLeno()
    {
        $capacidadMax = $this->getCantMaxPers();
        $cantidadActualObjPasajero = count($this->getObjPasajero());
        $bool = false;
        if ($cantidadActualObjPasajero == $capacidadMax){
            $bool = true;
        }
        return $bool;
    }

   /**
    * Metodo que nos permite crear un nuevo objeto Persona,
    *  ingresarlo en el arreglo del atributo ObjPasajero y setterar dicho atributo 
    *   @param string $nom
    *   @param string $apell
    *   @param int $numDNI
    *   @param int $numTelefono
     */
    
    public function AgregrarObjPasajero ($nomb, $apell, $numDni, $numTelefono)
    {
        // array $objPasajero
        $objPasajero = $this->getObjPasajero();// Recuperamos los datos del atributo
        $cantObjPasajero = count($objPasajero);
        $objPasajero[$cantObjPasajero] = new Pasajero($nomb,$apell,$numDni,$numTelefono); //Agregamos el nuevo objeto Persona al arreglo 
        $this->setObjPasajero($objPasajero); // Setteamos el atributo con los nuevos cambios
    }
    
    /** 
     * Metodo que toma por parametro el indice del arreglo que se desea modifica y el nuevo valor a modificar.
     * retorna un valor booleano como confirmacion exitosa de la implementacion del metodo.
     * @param int $clavePasajero
     * @param string $newNom
     * 
     * @return booleano $bool
    */
    public function ModificarNombre($newNom, $clavePasajero)
    {
        $bool=false; // Inicializamos la variable 
        $obj = $this->getObjPasajero(); //recuperamos los datos del atributo
        foreach ($obj as $key => $value) { // recorremos el arreglo
            if ($clavePasajero == $key){ // comparamos si el indice coincide con la clave ingresada por paramentro.

                $value->CambiarNombre($newNom); // llamamos al metodo del objeto Persona con el nuevo dato ingresado por parametro.
                $bool = true; // Cambiamos el valor de la variable para generar una confirmacion de que se implemento correctamente el metodo.

            }
       
        
        }
        return $bool;
    }

     /**
      *  Metodo que toma por parametro el indice del arreglo que se desea modifica y el nuevo valor a modificar.
     * retorna un valor booleano como confirmacion exitosa de la implementacion del metodo.
     * @param int $clavePasajero
     * @param string $newPellido
     * 
     * @return booleano $bool
    */
    public function ModificarApellido($newApellido, $clavePasajero)
    {
        $bool=false; // Inicializamos la variable
        $obj = $this->getObjPasajero(); //recuperamos los datos del atributo
        foreach ($obj as $key => $value) { // recorremos el arreglo
            if ($clavePasajero == $key){ // comparamos si el indice coincide con la clave ingresada por paramentro.

                $value->CambiarApellido($newApellido);// llamamos al metodo del objeto Persona con el nuevo dato ingresado por parametro.
                $bool = true;// Cambiamos el valor de la variable para generar una confirmacion de que se implemento correctamente el metodo.

            }
       
        
        }
        return $bool;
    }

     /** 
      * Metodo que toma por parametro el indice del arreglo que se desea modifica y el nuevo valor a modificar.
     * retorna un valor booleano como confirmacion exitosa de la implementacion del metodo.
     * @param int $clavePasajero
     * @param int $newDNI
     * 
     * @return booleano $bool
    */

    public function ModificarDNI($newDNI, $clavePasajero)
    {
        $bool=false;// Inicializamos la variable
        $obj = $this->getObjPasajero();//recuperamos los datos del atributo
        foreach ($obj as $key => $value) { // recorremos el arreglo
            if ($clavePasajero == $key){// comparamos si el indice coincide con la clave ingresada por paramentro.

                $value->CambiarDNI($newDNI);// llamamos al metodo del objeto Persona con el nuevo dato ingresado por parametro.
                $bool = true;// Cambiamos el valor de la variable para generar una confirmacion de que se implemento correctamente el metodo.

            }
       
        
        }
        return $bool;
    }

    public function ModificarNumTelefono($newPhone, $clavePasajero)
    {
        $bool=false;// Inicializamos la variable
        $obj = $this->getObjPasajero();//recuperamos los datos del atributo
        foreach ($obj as $key => $value) { // recorremos el arreglo
            if ($clavePasajero == $key){// comparamos si el indice coincide con la clave ingresada por paramentro.

                $value->CambiarDNI($newPhone);// llamamos al metodo del objeto Persona con el nuevo dato ingresado por parametro.
                $bool = true;// Cambiamos el valor de la variable para generar una confirmacion de que se implemento correctamente el metodo.

            }
       
        
        }
        return $bool;
        
    }

    
    /**
     * Metodo para borrar un elemento del atributo ObjPasajero, toma por parametro el indice que se desea eliminar
     * 
     * @param int $clavePasajero
     *  
      */
    public function BorrarPasajero($clavePasajero)
    {
       $x = $this->getObjPasajero(); // recuperamos los datos del atributo
       unset($x[$clavePasajero]); //con la funcion unset() eliminamos del arreglo el indice ingresado
       
       $x = $this->Reordenar($x); // invocamos al metodo Reordenar
       $this->setObjPasajero($x); // setteamos al atributo ObjPasajero con los valores reacomodados
       
       

    }

    /**
     * Metodo que toma por parametro un arreglo y le reacomoda para que no queden elementos huecos.
     * 
     * @param array $arregloDesordenado 
     * @return array
     */
    private function Reordenar($arregloDesordenado)
    {
        $i = 0; //inicializamos esta variable pivote
        $arrayReordenado = [];//inicializamos la variable donde se guardarna los datos reordenados
        
       foreach ($arregloDesordenado as $key => $value) {//recorremos el arreglo con huegos/deserdenado
           if(empty($value)){//corroboramos si la funcion empty retorna verdadero, esta funcion resulta verdadero si el elemento del arreglo es null/vacio.
               $i++; // se le suma 1 a la variable pivote. 
           }else{
               $arrayReordenado[] = $value;// los elementos del arreglo que contienen datos se asignan a un nuevo arrelo con nuevo indices ordenados
           }
       }
        return $arrayReordenado; // retornamos el arreglo ordenado
    }

    /**
     * Metodo que verifica que ningun dato por ser ingresado para un nuevo objeto pasajero se repita con otro ya ingresado
     * 
     * @param string $nomPasajero
     * @param string $apellidoPasajero
     * @param int $dniPasajero
     * @param int $telPasajero
     * @return bool
     */

    public function VerificacionPasajeros($nomPasajero, $apellidoPasajero, $dniPasajero, $telPasajero)
    {
        $objPasajero = $this->getObjPasajero();
        $validacion = false;

        if ( $objPasajero->getNombre() <> $nomPasajero && $objPasajero->getApellido() <> $apellidoPasajero && $objPasajero->getNumDni() <> $dniPasajero && $objPasajero->getNumTelefono() <> $telPasajero ){

            $validacion = true;
        }

        return $validacion;
        
    }




      public function __toString()
    {
        return "El viaje (N° ".$this->getCodigo().") con destino a ".$this->getDestino()."\ncuenta con una capacidad de ".$this->getCantMaxPers(). " pasajeros como maximo \nLos que pasajeos que viajan son: \n";
    }
    
    public function __destruct()
    {
        echo "\nEl viaje se suspendio \n";
    }
}


?>