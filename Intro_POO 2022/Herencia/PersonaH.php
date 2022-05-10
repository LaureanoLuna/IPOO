<?php


class PersonaH{

    private $nombre;
    private $numDNI;
    private $apellido;

    public function  __construct($dataNomb, $dataApellido, $dataNumDNI)
    {
        $this->nombre = $dataNomb;
        $this->apellido = $dataApellido;
        $this->numDNI = $dataNumDNI;

    }

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
     * Get the value of numDNI
     */ 
    public function getNumDNI()
    {
        return $this->numDNI;
    }

    /**
     * Set the value of numDNI
     *
     * @return  self
     */ 
    public function setNumDNI($numDNI)
    {
        $this->numDNI = $numDNI;

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

    public function __toString()
    {
        $str = "\nNombre: ". $this->getNombre().
                "\nApellido: ". $this->getApellido().
                "\nDNI: ". $this->getNumDNI();
        
        return $str;
    }
}
?>