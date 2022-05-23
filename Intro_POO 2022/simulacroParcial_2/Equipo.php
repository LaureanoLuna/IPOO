<?php

class Equipo{

    private $nombre;
    private $capitanEquipo;
    private $cantidadJugadores;
    private $objCategoriaEquipo;

    public function __construct($nombreEquipo, $capitanEqui, $cantidadJugadores)
    {
        $this->nombre = $nombreEquipo;
        $this->capitanEquipo = $capitanEqui;
        $this->cantidadJugadores = $cantidadJugadores;
        $this->objCategoriaEquipo;
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
 
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }

    /**
     * Get the value of capitanEquipo
     */ 
    public function getCapitanEquipo()
    {
        return $this->capitanEquipo;
    }

    /**
     * Set the value of capitanEquipo
 
     */ 
    public function setCapitanEquipo($capitanEquipo)
    {
        $this->capitanEquipo = $capitanEquipo;

    }

    /**
     * Get the value of cantidadJugadores
     */ 
    public function getCantidadJugadores()
    {
        return $this->cantidadJugadores;
    }

    /**
     * Set the value of cantidadJugadores
 
     */ 
    public function setCantidadJugadores($cantidadJugadores)
    {
        $this->cantidadJugadores = $cantidadJugadores;

    }

    /**
     * Get the value of objCategoriaEquipo
     */ 
    public function getObjCategoriaEquipo()
    {
        return $this->objCategoriaEquipo;
    }

    /**
     * Set the value of objCategoriaEquipo

     */ 
    public function setObjCategoriaEquipo($objCategoriaEquipo)
    {
        $this->objCategoriaEquipo = $objCategoriaEquipo;

    }
}
?>
