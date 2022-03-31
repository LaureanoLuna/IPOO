<?php

/* 1. Implementar una clase Persona con los atributos: nombre, apellido, tipo y número de documento.
a) Defina en la clase los siguientes métodos:
1. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.
2. Los métodos de acceso de cada uno de los atributos de la clase.
3. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
4. Crear un script Test_Persona que cree un objeto Persona e invoque a cada uno de los
métodos implementados
 */

 class Persona
 {
     private $nomPersona;
     private $tipoNumDNI;

     public function __construct($nomYapell, $tyNdni)
     {
         $this->nomPersona = $nomYapell;
         $this->tipoNumDNI = $tyNdni;
     }
     

     /**
      * Get the value of nomPersona
      */ 
     public function getNomPersona()
     {
          return $this->nomPersona;
     }

     /**
      * Set the value of nomPersona
      *
      * @return  self
      */ 
     public function setNomPersona($nomPersona)
     {
          $this->nomPersona = $nomPersona;

          return $this;
     }

     /**
      * Get the value of tipoNumDNI
      */ 
     public function getTipoNumDNI()
     {
          return $this->tipoNumDNI;
     }

     /**
      * Set the value of tipoNumDNI
      *
      * @return  self
      */ 
     public function setTipoNumDNI($tipoNumDNI)
     {
          $this->tipoNumDNI = $tipoNumDNI;

          return $this;
     }

     public function __toString()
     {
         return ($this->getNomPersona()["apellido"]).", ".($this->getNomPersona()["nombre"])."\n".($this->getTipoNumDNI()["tipoDNI"]).": ".($this->getTipoNumDNI()["numeroDNI"]);
     }
 }
 
?>