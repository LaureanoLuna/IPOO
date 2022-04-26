<?php

class Banco{

    private $objMostrador;
    private $numBanco;

    public function __construct($cantMostrador, $bancoNum)
    {
        $this->objMostrador;
        $this->numBanco = $bancoNum;
        
    }

    /**
     * Get the value of objMostrador
     */ 
    public function getObjMostrador()
    {
        return $this->objMostrador;
    }

    /**
     * Set the value of objMostrador
     *
     * @return  self
     */ 
    public function setObjMostrador($objMostrador)
    {
        $this->objMostrador = $objMostrador;

        return $this;
    }
    
    /**
     * Get the value of numBanco
     */ 
    public function getNumBanco()
    {
        return $this->numBanco;
    }

    /**
     * Set the value of numBanco
     *
     * @return  self
     */ 
    public function setNumBanco($numBanco)
    {
        $this->numBanco = $numBanco;

        return $this;
    }

    public function CreacionMostrador($tramite,$cantMostrador)
    {
        $mostrador = $this->getObjMostrador();

        for ($i=0; count($this->getObjMostrador()) == $cantMostrador ; $i++) { 
            
            $mostrador[$i] = new Mostrador($tramite);
        }

        $this->setObjMostrador($mostrador);
        return true;
    }

    public function StringMostrador()
    {
        $mostrador = $this->getObjMostrador();
        foreach ($mostrador as $key => $value) {
            return $value;
        }
    }

    public function __toString()
    {
        $str = "Banco N° ". $this->getNumBanco()."\n
                Cantidad de Mostradores: ". $this->StringMostrador()."\n";
    }

}


?>