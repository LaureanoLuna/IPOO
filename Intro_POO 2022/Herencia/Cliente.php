<?php

class Cliente extends PersonaH{

    private $numCliente;

    public function __construct($nombre, $apellido, $dni, $numCliente)
    {
        parent::__construct($nombre,$apellido,$dni);

        $this->numCliente = $numCliente;        
    }   
    

    /**
     * Get the value of numCliente
     */ 
    public function getNumCliente()
    {
        return $this->numCliente;
    }

    /**
     * Set the value of numCliente
     *
     * @return  self
     */ 
    public function setNumCliente($numCliente)
    {
        $this->numCliente = $numCliente;

        return $this;
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str.= "\nCliente N° ". $this->getNumCliente();

        return $str;
    }


}

?>