<?php
/* La clase Persona, debe contar con atributos de caracteristicas de persona, como color de pelo, estatura, color de ojos, nombre y apellido, nro de DNI.
los metodos deberian ser, caminar, pararse, saltar, hablar, comer, beber, dormi, entrenar, trabajar */
class Persona {

    private $nombre;
    private $apellido;
    private $nroDNI;
    
    
    public function __construct($nombrePers,$apellido,$nroDNIPers,)
    {
        $this->nombre = $nombrePers;
        $this->apellido = $apellido;
        $this->nroDNI = $nroDNIPers;
       
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

    /**
     * Get the value of nroDNI
     */ 
    public function getNroDNI()
    {
        return $this->nroDNI;
    }

    /**
     * Set the value of nroDNI
     *
     * @return  self
     */ 
    public function setNroDNI($nroDNI)
    {
        $this->nroDNI = $nroDNI;

        return $this;
    }
    
   


    public function __toString()
    {
        $str = "Nombre: ".$this->getNombre()."\n
                DNI: ".$this->getNroDNI()."\n
                Apellido: ".$this->getApellido()."\n";
      
        return $str;
    }

    public function __destruct()
    {
        echo $this . "\n La persona a fallecido \n";
        
    }
}
     





