<?php

/* También se desea guardar la información de la persona responsable de realizar el viaje,
   para ello cree una clase ResponsableV que registre el número de empleado,
   número de licencia, nombre y apellido.
 */

 class ResponsableV{

    private $numEmpleado;
    private $numLicencia;
    private $nombre;
    private $apellido;

    public function __construct($empleadoNumero, $licenscia, $nomEmpleado, $apellidoEmpleado)
    {
        $this->numEmpleado = $empleadoNumero;
        $this->numLicencia = $licenscia;
        $this->nombre = $nomEmpleado;
        $this->apellido = $apellidoEmpleado;        
    }

    // Metodos de acceso a los datos de los atributos 

    /**
     * Get the value of numEmpleado
     */ 
    public function getNumEmpleado()
    {
        return $this->numEmpleado;
    }

    /**
     * Set the value of numEmpleado
     *
     * @return  self
     */ 
    public function setNumEmpleado($numEmpleado)
    {
        $this->numEmpleado = $numEmpleado;

        return $this;
    }

    /**
     * Get the value of numLicencia
     */ 
    public function getNumLicencia()
    {
        return $this->numLicencia;
    }

    /**
     * Set the value of numLicencia
     *
     * @return  self
     */ 
    public function setNumLicencia($numLicencia)
    {
        $this->numLicencia = $numLicencia;

        return $this;
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

    public function __toString()
    {
        $str = "Datos del responsable de Viaje: \n
                Nombre: ". $this->getNombre()."\n
                Apellido: ". $this->getApellido()."\n
                Numero de empleado: ". $this->getNumEmpleado()."\n
                Licencia N°". $this->getNumLicencia()."\n";

        return $str;
    }


 }
?>