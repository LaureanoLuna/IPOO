<?php

class Banco{

    private $objMostrador;
    private $numBanco;

    public function __construct($bancoNum)
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

    public function CreacionMostrador($tramite)
    {
        $mostrador = $this->getObjMostrador();
        $mostrador[]= new Mostrador($tramite);
        $this->setObjMostrador($mostrador);

        return true;
    }

    public function QueMostradorAtiendeTramite($unTramite)
    {
        $objMostrador = $this->getObjMostrador();
        foreach ($objMostrador as $key => $value) {
            if ($objMostrador->getTipo_Tramite() == $unTramite){
                $mostradoresDisponibles[] = $value;
            }
        }

        return $mostradoresDisponibles;
    }

    public function MejorMostradorPara($unTramite)
    {
        $mostradores = $this->QueMostradorAtiendeTramite($unTramite);
        $pivote = $mostradores->getCantPersCola;
        foreach ($mostradores as $key => $value){
            $cantPers = count($value->getPersEnCola());
            if ($cantPers < $pivote){
                $pivote = $cantPers;
                $mostradorIdeal = $value;
            }
            else{
                $mostradorIdeal = null;
            }
        }

        return $mostradorIdeal;
    }

    public function Atender($objPersona)
    {
        $tramite=$this->getObjMostrador()->getObjPersona()->getObjTramite()->getTipoTramite();
        
        if($this->MejorMostradorPara($tramite)){
            $mostrador = $this->getObjMostrador();
            $idMostrador = 
            $mostrador[]

        }
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