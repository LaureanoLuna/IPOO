<?php
/* La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar la información referente a sus viajes. De cada viaje se precisa almacenar el código del mismo, destino,
 cantidad máxima de pasajeros y los pasajeros del viaje.

Realice la implementación de la clase Viaje e implemente los métodos necesarios para modificar los atributos de dicha clase (incluso los datos de los pasajeros).
 Utilice un array que almacene la información correspondiente a los pasajeros. Cada pasajero es un array asociativo con las claves “DNI”, “apellido” y “numero de documento”.

Implementar un script testViaje.php que cree una instancia de la clase Viaje y presente un menú que permita cargar la información del viaje, modificar y ver sus datos. */

class ViajeFeliz{

    private $codigo;
    private $destino;
    private $cantMaxPers;
    private $pasajeros;

    public function __construct($codViaje, $lugarDestino, $limitPers, $dataPasajeros)
    {
        $this->codigo = $codViaje;
        $this->destino = $lugarDestino;
        $this->cantMaxPers = $limitPers;
        $this->pasajeros = $dataPasajeros;
        
    }
    

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
    public function getPasajeros()
    {
        return $this->pasajeros;
    }

    /**
     * Set the value of pasajeros
     *
     * @return  self
     */ 
    public function setPasajeros($pasajeros)
    {
        $this->pasajeros = $pasajeros;

        return $this;
    }

    public function estaLLeno()
    {
        $capacidadMax = $this->getCantMaxPers();
        $cantidadActualPasajeros = count($this->getPasajeros());
        $bool = false;
        if ($cantidadActualPasajeros == $capacidadMax){
            $bool = true;
        }
        return $bool;
    }

   
    public function AgregrarPasajeros ($nomb,$apell,$numDni)
    {
        $pasajeros = $this->getPasajeros();
        $pasajeros[] = new Persona($nomb,$apell,$numDni);
        $this->setPasajeros($pasajeros);
    }

    public function ModificarNombre($newNom, $clavePasajero)
    {
        $bool=false;
        $obj = $this->getPasajeros();
        foreach ($obj as $key => $value) {
            if ($clavePasajero == $key){

                $value->CambiarNombre($newNom);
                $bool = true;

            }
       
        
        }
        return $bool;
    }

    public function ModificarApellido($newApellido, $clavePasajero)
    {
        $bool=false;
        $obj = $this->getPasajeros();
        foreach ($obj as $key => $value) {
            if ($clavePasajero == $key){

                $value->CambiarApellido($newApellido);
                $bool = true;

            }
       
        
        }
        return $bool;
    }

    public function ModificarDNI($newDNI, $clavePasajero)
    {
        $bool=false;
        $obj = $this->getPasajeros();
        foreach ($obj as $key => $value) {
            if ($clavePasajero == $key){

                $value->CambiarDNI($newDNI);
                $bool = true;

            }
       
        
        }
        return $bool;
    }

    public function BorrarPasajero($clavePasajero)
    {
       $x = $this->getPasajeros();
       unset($x[$clavePasajero]);
       
       $x = $this->Reordenar($x);
       $this->setPasajeros($x);
       
       

    }
    public function Reordenar($x)
    {
        $i = 0;
        $a = [];
        
       foreach ($x as $key => $value) {
           if(empty($value)){
               $i++;
           }else{
               $a[] = $value;
           }
       }
        return $a;
    }

      public function __toString()
    {
        return "El viaje con destino a ".$this->getDestino().", cuenta con una capacidad de ".$this->getCantMaxPers(). " pasajeros como maximo \nLos que viajan son: \n";
    }
    
}


?>