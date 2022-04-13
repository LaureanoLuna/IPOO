<?php
 /*  En la clase Persona:
            1. Se registra la siguiente información: nombre, apellido, dni, direccion, mail, telefono y neto.
            2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
            clase.
            3. Los métodos de acceso de cada uno de los atributos de la clase.
            4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
    */

class PersonaPrestamo{

    private $nombrePers;
    private $apellidoPers;
    private $numeroDNI;
    private $direccionPers;
    private $persEmail;
    private $numTelefono;
    private $neto;
    
    public function __construct($nomPersona, $apellidoPers, $numDNI, $direPers, $emailPers, $phonoPers, $sueldoNeto)
    {
        $this->nombrePers = $nomPersona;
        $this->apellidoPers = $apellidoPers;
        $this->numeroDNI = $numDNI;
        $this->direccionPers = $direPers;
        $this->persEmail = $emailPers;
        $this->numTelefono = $phonoPers;
        $this->neto = $sueldoNeto;
        
    }

    // implementamos los metodos de acceso a los atributos

    /**
     * Get the value of nombrePers
     */ 
    public function getNombrePers()
    {
        return $this->nombrePers;
    }

    /**
     * Set the value of nombrePers
     *
     * @return  self
     */ 
    public function setNombrePers($nombrePers)
    {
        $this->nombrePers = $nombrePers;

        return $this;
    }

    /**
     * Get the value of apellidoPers
     */ 
    public function getApellidoPers()
    {
        return $this->apellidoPers;
    }

    /**
     * Set the value of apellidoPers
     *
     * @return  self
     */ 
    public function setApellidoPers($apellidoPers)
    {
        $this->apellidoPers = $apellidoPers;

        return $this;
    }

    /**
     * Get the value of numeroDNI
     */ 
    public function getNumeroDNI()
    {
        return $this->numeroDNI;
    }

    /**
     * Set the value of numeroDNI
     *
     * @return  self
     */ 
    public function setNumeroDNI($numeroDNI)
    {
        $this->numeroDNI = $numeroDNI;

        return $this;
    }

    /**
     * Get the value of direccionPers
     */ 
    public function getDireccionPers()
    {
        return $this->direccionPers;
    }

    /**
     * Set the value of direccionPers
     *
     * @return  self
     */ 
    public function setDireccionPers($direccionPers)
    {
        $this->direccionPers = $direccionPers;

        return $this;
    }

    /**
     * Get the value of persEmail
     */ 
    public function getPersEmail()
    {
        return $this->persEmail;
    }

    /**
     * Set the value of persEmail
     *
     * @return  self
     */ 
    public function setPersEmail($persEmail)
    {
        $this->persEmail = $persEmail;

        return $this;
    }

    /**
     * Get the value of numTelefono
     */ 
    public function getNumTelefono()
    {
        return $this->numTelefono;
    }

    /**
     * Set the value of numTelefono
     *
     * @return  self
     */ 
    public function setNumTelefono($numTelefono)
    {
        $this->numTelefono = $numTelefono;

        return $this;
    }

     /**
     * Get the value of neto
     */ 
    public function getNeto()
    {
        return $this->neto;
    }

    /**
     * Set the value of neto
     *
     * @return  self
     */ 
    public function setNeto($neto)
    {
        $this->neto = $neto;

        return $this;
    }

    /**
     * Implementamos el metodo para poder mostar los datos de la clase
     */

    public function __toString()
    {
        return "\nApellido y Nombre: ".$this->getApellidoPers().", ". $this->getNombrePers().
               "\nNumero de DNI: ". $this->getNumeroDNI().
               "\nNumero de telefono: ". $this->getNumTelefono().
               "\nDomicilio: ".$this->getDireccionPers().
               "\nCorreo electronico: ". $this->getPersEmail();
    }

    /**
     * Implemtentamos el metodo para casos de no funcionar la clase
     */
/* 
    public function __destruct()
    {
        echo "\nLa persona no esta registrada\n";
    } */

   
}
?>