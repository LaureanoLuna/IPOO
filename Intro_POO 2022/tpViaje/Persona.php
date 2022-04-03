<?php 

/** Clase Persona , tiene un atributo el cual es un arreglo con las claves: nombre, apellido, DNI.
 * correspondiendo a los datos ingresados para identificar al objeto Persona
 */
class Persona{

    private $persona;
  
        /**Implementamos el metodo Constructor del objeto
         * @param string $nomPers
         * @param string $apellidoPers
         * @param atring $dniPersona
         * 
         */

    public function __construct($nomPers, $apellidoPers, $dniPersona)
    {
        $this->persona["nombre"] = $nomPers;
        $this->persona["apellido"] = $apellidoPers;
        $this->persona["DNI"] = $dniPersona;
    }

        //Implementamos los metodos de acceso a los atributos
        // Getters y Setters
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

    /**
     * Metodo que permite settear el atributo array del objeto, en un indice espesifico ingresado por parametro.
     * 
     * @param int $clave
     * @param string/int $nuevoDato
     */

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
    /** Metodo que settea el dato del atributo en clave nombre, invocando el metodo CambiarDato.
     * @param string $nuevoNombre
     */
    public function CambiarNombre($nuevoNombre)
    {
        $this->CambiarDatos("nombre",$nuevoNombre);
    }

    /**Metodo que settea el dato del atributo en la clave apellido, invocando el metodo CambiarDato.
     * @param string $nuevoApellido
     */
    public function CambiarApellido($nuevoApellido)
    {
        $this->CambiarDatos("apellido",$nuevoApellido);
    }

    /**Metodo que settea el dato del atributo en clave DNI, invocando el metodo CambiarDato.
     * @param int $nuevoDNI
     */
    public function CambiarDNI($nuevoDNI)
    {
        $this->CambiarDatos("DNI", $nuevoDNI);
    }

    /**Metodo implemetado para poder mostrar los datos de dicho objeto */
    public function __toString()
    {
        return " Nombre: ".($this->getPersona()["nombre"])."\n Apellido: ".($this->getPersona()["apellido"]."\n Numero de DNI: ".($this->getPersona()["DNI"]))."\n";
    }

    /**Metodo implementado que retorna un mensaje en cuyo caso fallara la creacion del objeto */
     public function __destruct()
    {
        echo "\nLos datos son invalidos. \n";
    } 


}
?>