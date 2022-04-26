<?php


class PersonaT{

    private $nombreP;
    private $apellidoP;
    private $dniP;
    private $objTramite;

    public function __construct($nombre,$apellido,$numDNI,$tramite)
    {
        $this->nombreP =$nombre;
        $this->apellidoP= $apellido;
        $this->dniP = $numDNI;
        $this->objTramite = $tramite;        
    }

    

    /**
     * Get the value of nombreP
     */ 
    public function getNombreP()
    {
        return $this->nombreP;
    }

    /**
     * Set the value of nombreP
     *
     * @return  self
     */ 
    public function setNombreP($nombreP)
    {
        $this->nombreP = $nombreP;

        return $this;
    }

    /**
     * Get the value of apellidoP
     */ 
    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    /**
     * Set the value of apellidoP
     *
     * @return  self
     */ 
    public function setApellidoP($apellidoP)
    {
        $this->apellidoP = $apellidoP;

        return $this;
    }

    /**
     * Get the value of dniP
     */ 
    public function getDniP()
    {
        return $this->dniP;
    }

    /**
     * Set the value of dniP
     *
     * @return  self
     */ 
    public function setDniP($dniP)
    {
        $this->dniP = $dniP;

        return $this;
    }

    /**
     * Get the value of tipoTramite
     */ 
    public function getObjTramite()
    {
        return $this->objTramite;
    }

    /**
     * Set the value of tipoTramite
     *
     * @return  self
     */ 
    public function setObjTramite($objTramite)
    {
        $this->objTramite = $objTramite;

        return $this;
    }

    public function __toString()
    {
        $str = "Nombre: ". $this->getNombreP()."\n
                Apellido: ". $this->getApellidoP()."\n
                DNI: ". $this->getDniP()."\n
                Tramite: ". $this->getObjTramite()."\n";
        
        return $str;
    }
}
?>