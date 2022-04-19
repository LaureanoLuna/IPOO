<?php

/* los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono. */

class Pasajero{

    private $nombre;
    private $apellido;
    private $numDni;
    private $numTelefono;

    public function __construct($nombPasajero, $apellidoPasajero, $numeroDni, $numeroTelefono)
    {
        $this->nombre = $nombPasajero;
        $this->apellido = $apellidoPasajero;
        $this->numDni = $numeroDni;
        $this->numTelefono = $numeroTelefono;
    }

    
    // Metodos de acceseso a los atributos de la clase Pasajero

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of numDni
     */ 
    public function getNumDni()
    {
        return $this->numDni;
    }

    /**
     * Set the value of numDni
     *
     * @return  self
     */ 
    public function setNumDni($numDni)
    {
        $this->numDni = $numDni;

        return $this;
    }

    /**
     * Get the value of numTelefono
     */ 
    public function getNumTelefono()
    {
        return $this->numTelefono;
    }

    /**
     * Set the value of numTelefono
     *
     * @return  self
     */ 
    public function setNumTelefono($numTelefono)
    {
        $this->numTelefono = $numTelefono;

        return $this;
    }

    //Metodo para visualizar los datos de los objetos creados en la clase Pasajero
    public function __toString()
    {
        $str = "Nombre: ". $this->getNombre()."\n
                Apellido: ". $this->getApellido()."\n
                DNI: ". $this->getNumDni()."\n
                Telefono: ". $this->getNumTelefono()."\n";

        return $str;
    }
}

?>