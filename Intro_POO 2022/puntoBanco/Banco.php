<?php

class Banco{

    private $nombreBanco;
    private $objMostrador;
    private $objPersona;

    public function __construct($nombreBanco,$objMostrador,$objPersona)
    {
        $this->nombreBanco = $nombreBanco;
        $this->objMostrador = $objMostrador;
        $this->objPersona = $objPersona ;        
    }

    
        //METODOS DE ACCESO DEL OBJETO

    /**
     * Get the value of nombreBanco
     */ 
    public function getNombreBanco()
    {
        return $this->nombreBanco;
    }

    /**
     * Set the value of nombreBanco
     *
     * @return  self
     */ 
    public function setNombreBanco($nombreBanco)
    {
        $this->nombreBanco = $nombreBanco;

        return $this;
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
     * Get the value of objPersona
     */ 
    public function getObjPersona()
    {
        return $this->objPersona;
    }

    /**
     * Set the value of objPersona
     *
     * @return  self
     */ 
    public function setObjPersona($objPersona)
    {
        $this->objPersona = $objPersona;

        return $this;
    }

    public function __toString()
    {
        $str = "{$this->getNombreBanco()}\n{$this->getObjMostrador()}}";

        return $str;
    }

    public function MostradorQueAtiende($unTramite)
    {
        $objMostrador = $this->getObjMostrador();
        $mostradoresQueAtienden = [];
        foreach ($objMostrador as $key => $value) {
            $tramite = $value->getTipo_Tramite();
            if ($tramite == $unTramite){

                $mostradoresQueAtienden[] = $value; 
            }

        }

        return $mostradoresQueAtienden;
    }

    public function MejorMostradorPara($unTramite)
    {
        $objMostradorQueAtienden = $this->MostradorQueAtiende($unTramite);
        $pivote = Mostrador::getCantPersCola();
        foreach ($objMostradorQueAtienden as $key => $value) {
            $persEnLaFila = $value->getPersEnCola();
            if($persEnLaFila < $pivote){
                $mostradorMasVacio = $value;
            }else{
                $mostradorMasVacio = null;
            }
            
        }

        return $mostradorMasVacio;        
    }

    public function atender($unCliente)
    {
       $tipoTramite =  $unCliente->getObjTramite()->getTipoTramite();

       if ($this->MejorMostradorPara($tipoTramite) <> null){

            $mostrador =$this->MejorMostradorPara($tipoTramite);
            $mostrador-> SumarPersCola($unCliente);
            return true;
       }else {
            return false;
       }
    }

}