<?php

class Tramite{

    private $horaCreacion;
    private $horaResolucion;
    private $tipoTramite;

    public function __construct($tramite)
    {
        $this->tipoTramite = $tramite;
        $this->horaCreacion;
        $this->horaResolucion;
        
    }

    /**
     * Get the value of tipoTramite
     */ 
    public function getTipoTramite()
    {
        return $this->tipoTramite;
    }

    /**
     * Set the value of tipoTramite
     *
     * @return  self
     */ 
    public function setTipoTramite($tipoTramite)
    {
        $this->tipoTramite = $tipoTramite;

        return $this;
    }

    /**
     * Get the value of horaResolucion
     */ 
    public function getHoraResolucion()
    {
        return $this->horaResolucion;
    }

    /**
     * Set the value of horaResolucion
     *
     * @return  self
     */ 
    public function setHoraResolucion($horaResolucion)
    {
        $this->horaResolucion = $horaResolucion;

        return $this;
    }

    /**
     * Get the value of horaCreacion
     */ 
    public function getHoraCreacion()
    {
        return $this->horaCreacion;
    }

    /**
     * Set the value of horaCreacion
     *
     * @return  self
     */ 
    public function setHoraCreacion($horaCreacion)
    {
        $this->horaCreacion = $horaCreacion;

        return $this;
    }

    /**Metodo que settea la hora en la que el tramite es iniciado con la funcion getDate()
     * @return bool
     */

     public function IniciarTramite()
     {
        $creacion = getdate();
        $this->setHoraCreacion($creacion);
        return true;
     }

     /**
      * Metodo que settea fecha en la se obtuvo la resolucion de dicho tramite.
      * @return bool 
      */
     public function ResolucionTramite()
     {
         $resolucion = getDate();
         $this->setHoraResolucion($resolucion);
         return true;
        
     }

    public function __toString()
    {
        $str = "Tramite: ". $this->getTipoTramite()."\n
                Hs Inicio: ". $this->getHoraCreacion()."\n
                Hs Resolucion: ".$this->getHoraResolucion()."\n";

        return $str;
    }
}

?>