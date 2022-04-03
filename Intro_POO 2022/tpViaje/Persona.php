<?php 

class Persona{

    private $persona;
  

    public function __construct($nomPers, $apellidoPers, $dniPersona)
    {
        $this->persona["nombre"] = $nomPers;
        $this->persona["apellido"] = $apellidoPers;
        $this->persona["DNI"] = $dniPersona;
    }

    /**
     * Get the value of persona
     */ 
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set the value of persona
     *
     * @return  self
     */ 
    public function setPersona($persona)
    {
      $this->persona = $persona;        
    }

    public function CambiarDatos($clave,$nuevoDato)
    {
        $arrayPersona = $this->getPersona();
        foreach ($arrayPersona as $key => $value) {
            if ( $clave == $key){
                $arrayPersona[$key] = $nuevoDato;
            }
        }
        $this->setPersona($arrayPersona);
    }

    public function CambiarNombre($nuevoNombre)
    {
        $this->CambiarDatos("nombre",$nuevoNombre);
    }

    public function CambiarApellido($nuevoApellido)
    {
        $this->CambiarDatos("apellido",$nuevoApellido);
    }

    public function CambiarDNI($nuevoDNI)
    {
        $this->CambiarDatos("DNI", $nuevoDNI);
    }

    public function __toString()
    {
        return "\nNombre: ".($this->getPersona()["nombre"])."\n Apellido: ".($this->getPersona()["apellido"]."\n Numero de DNI: ".($this->getPersona()["DNI"]))."\n";
    }

   /*  public function __destruct()
    {
        echo "\nLos datos son invalidos. \n";
    } */


}
?>