<?php
/* 15. Un teatro se caracteriza por su nombre y su dirección y en él se realizan 4 funciones al día. Cada función tiene
un nombre y un precio. Realice el diseño de la clase Teatro e indique qué métodos tendría que tener la clase,
teniendo en cuenta que se pueda cambiar el nombre del teatro y la dirección, el nombre de un función y el
precio. Implementar las 4 funciones usando array de array asociativo. Cada función es un array asociativo con
las claves “nombre” y “precio”. */

class Teatro{

    private $nombTeatro;
   

    public function __construct($nombreTeatro)
    {
        $this->nombTeatro = $nombreTeatro;
        
    }

    /**
     * Get the value of nombTeatro
     */ 
    public function getNombTeatro()
    {
        return $this->nombTeatro;
    }

    /**
     * Set the value of nombTeatro
     *
     * @return  self
     */ 
    public function setNombTeatro($clave,$nombTeatro)
    {
        foreach ($this->nombTeatro as $key => $value ) {
            if ($key == $clave){
                $this->nombTeatro[$key]=$nombTeatro;
            }
        }
        

        return $this;
    }

    public function CambiarFuncion($nuevaFuncion)
    {
      $this->setNombTeatro("nombFuncion",$nuevaFuncion);
    }

    public function CambiarPrecio($nuevoValor)
    {
        $this->setNombTeatro("precioFuncion", $nuevoValor);
    }

    public function CambiarDireccion($nuevaDireccion)
    {
        $this->setNombTeatro("direcTeatro",$nuevaDireccion);
    }

    public function CambiarNombreTeatro($nuevoTeatro)
    {
        $this->setNombTeatro("NombTeatro",$nuevoTeatro);
    }

    public function __toString()
    {
        return "\nEn el teatro ".($this->getNombTeatro()["NombTeatro"]).",\nen la ". ($this->getNombTeatro()["direcTeatro"])."\nesta la obra teatral llamada ".($this->getNombTeatro()["nombFuncion"])." a un precio de $".($this->getNombTeatro()["precioFuncion"])." la entrada\n";
    }

    public function __destruct()
    {
        echo "\nLa funcion teatral fue cancelada \n";
    }
}

?>
