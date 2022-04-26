<?php


class Mostrador{

    private $idMostrador;// atributo de identificacion de el objeto
    private $tipo_Tramite;// atributo tipo arreglo con la identificacion de los tramites que realiza
    static private $cantPersCola = 5;// atributo tipo intiger con la cantidad limites de personas por mostrador
    private $persEnCola;

    public function __construct($tramites)
    {
        $this->idMostrador = 0;
        $this->tipo_Tramite = $tramites;
        $this->cantPersCola;
        $this->persEnCola;        
    }

    

    /**
     * Get the value of idMostrador
     */ 
    public function getIdMostrador()
    {
        return $this->idMostrador;
    }

    /**
     * Set the value of idMostrador
     *
     * @return  self
     */ 
    public function setIdMostrador($idMostrador)
    {
        $this->idMostrador = $idMostrador;

        return $this;
    }

    /**
     * Get the value of tipo_Tramite
     */ 
    public function getTipo_Tramite()
    {
        return $this->tipo_Tramite;
    }

    /**
     * Set the value of tipo_Tramite
     *
     * @return  self
     */ 
    public function setTipo_Tramite($tipo_Tramite)
    {
        $this->tipo_Tramite = $tipo_Tramite;

        return $this;
    }

    /**
     * Get the value of cantPersCola
     */ 
    public function getCantPersCola()
    {
        return $this->cantPersCola;
    }

    /**
     * Set the value of cantPersCola
     *
     * @return  self
     */ 
    public function setCantPersCola($cantPersCola)
    {
        $this->cantPersCola = $cantPersCola;

        return $this;
    }
    /**
     * Get the value of persEnCola
     */ 
    public function getPersEnCola()
    {
        return $this->persEnCola;
    }

    /**
     * Set the value of persEnCola
     *
     * @return  self
     */ 
    public function setPersEnCola($persEnCola)
    {
        $this->persEnCola = $persEnCola;

        return $this;
    }

    /**
     * Metodo que verifica si la cantidad de personas el la misma que el limite
     * 
     * @return bool $bool
     */

    private function estaLLeno_o_No()
    {
        $limiteCantPers = $this->getCantPersCola();
        $colaPesonas = count($this->getPersEnCola());
        if ($limiteCantPers === $colaPesonas){
            
            $bool = false;
        }
        else{
            $bool =true;
        }
        return $bool;
    }
    /**
     * Metodo que settea con el objeto Personal incorporado al array del atributo
     * 
     * @param class $objpers
     * @return bool 
     */

    public function SumarPersCola($objpers)
    {
        $colaPers = $this->getPersEnCola();
       
        if ($this->estaLLeno_o_No()){
            $colaPers[]=$objpers;
            $this->setPersEnCola($colaPers);
            $bool = true;

        }else{

            $bool = false;
        }
      
        return $bool;
    }

    /**
     * Metodo para visualizar los tramites que realiza el objeto Mostrador
     * 
     * @return string $strTramites
     */
    public function StringTramites()//
    {   
        $strTramites = "";// Inicializamos la variable del tipo string 
        $objTramites = $this->getTipo_Tramite();//recuperamos los datos del atributo
        foreach ($objTramites as $key) {// recorremos cada objeto
            
             $strTramites .= $key."\n";// concatenamos y almacenamos en la variable, cada string con los valores del objeto almacenados
        }

        return $strTramites;// retornamos la variable con todos los valores concatenados del atributo 
    }


    /**
     * Metodo para visualizar los objPersonas que estan en la cola del mostrador
     * 
     * @return string $strPersona
     */

    public function StringPersona()//
    {
        $strPersona = "";//Incializamos las variable tipo string
        $objPersona = $this->getPersEnCola();// recuperamos los datos del atributo
        foreach ($objPersona as $key => $value) {//recorremos los datos del atributo
            $strPersona .= $key."\n";//concatenamos y almacenamos en las variable, cada string con los valores del objeto Persona
        }
        return $strPersona;//retornamos la variable con todos los valores del del objeto del atributos
    }

    public function __toString()
    {
        $str = "Mostrador numero: ". $this->getIdMostrador()."\n
                Realiza los siguientes tramites: ". $this->StringTramites()."\n
                La cantidad de personas que estan en el mostrador son: ".count($this->getPersEnCola)."\n
                las cuales son: ". $this->StringPersona()."\n";
        
        return $str;
    }

    
}

?>