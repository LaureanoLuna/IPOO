<?php

class Partido{

    private $idPartido;
    private $fechaPartido;
    private $objEquipoA;
    private $objEquipoB;
    private $golEquipoA;
    private $golEquipoB;

    public function __construct($idPartido, $fechaPartido)
    {
        $this->idPartido = $idPartido;
        $this->fechaPartido = $fechaPartido;
        $this->golEquipoA = 0;
        $this->golEquipoB = 0;
        $this->objEquipoA;
        $this->objEquipoB;        
    }

    /**
     * Get the value of idPartido
     */ 
    public function getIdPartido()
    {
        return $this->idPartido;
    }

    /**
     * Set the value of idPartido
     */ 
    public function setIdPartido($idPartido)
    {
        $this->idPartido = $idPartido;

    }

    /**
     * Get the value of fechaPartido
     */ 
    public function getFechaPartido()
    {
        return $this->fechaPartido;
    }

    /**
     * Set the value of fechaPartido
     */ 
    public function setFechaPartido($fechaPartido)
    {
        $this->fechaPartido = $fechaPartido;

    }

    /**
     * Get the value of objEquipoA
     */ 
    public function getObjEquipoA()
    {
        return $this->objEquipoA;
    }

    /**
     * Set the value of objEquipoA
     */ 
    public function setObjEquipoA($objEquipoA)
    {
        $this->objEquipoA = $objEquipoA;

    }

    /**
     * Get the value of objEquipoB
     */ 
    public function getObjEquipoB()
    {
        return $this->objEquipoB;
    }

    /**
     * Set the value of objEquipoB
     */ 
    public function setObjEquipoB($objEquipoB)
    {
        $this->objEquipoB = $objEquipoB;

    }

    /**
     * Get the value of golEquipoA
     */ 
    public function getGolEquipoA()
    {
        return $this->golEquipoA;
    }

    /**
     * Set the value of golEquipoA
     */ 
    public function setGolEquipoA($golEquipoA)
    {
        $this->golEquipoA = $golEquipoA;

    }

    /**
     * Get the value of golEquipoB
     */ 
    public function getGolEquipoB()
    {
        return $this->golEquipoB;
    }

    /**
     * Set the value of golEquipoB
     */ 
    public function setGolEquipoB($golEquipoB)
    {
        $this->golEquipoB = $golEquipoB;

    }

    public function __toString()
    {
        $str = "En el Partido n°". $this->getIdPartido().
        "\nSe jugó el dia ". $this->getfechaPartido().
        "\nEl equipo ". $this->getObjEquipoA(). " vs ". $this->getObjEquipoB().
        "\n-------- ". $this->getGolEquipoA() ."  -  ". $this->getGolEquipoB()." ------- ";

        return $str;
    }


    public function agregarEquipo($objEquipo)
    {
        $this->setObjEquipoA($objEquipo);
        return true;
    }
}

?>