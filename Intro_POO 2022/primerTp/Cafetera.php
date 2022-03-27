<?php

/**13. Desarrollar una clase Cafetera con los atributos capacidadMaxima (la cantidad máxima de café que puede
contener la cafetera) y cantidadActual (la cantidad actual de café que hay en la cafetera). Implementar los
siguientes métodos:
13.a. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.
13.b. Los método de acceso de cada uno de los atributos de la clase.
13.c. llenarCafetera(): la cantidad actual debe ser igual a la capacidad de la cafetera.
13.d. servirTaza($cantidad): simula la acción de servir una taza con la capacidad indicada. Si la
cantidad actual de café “no alcanza” para llenar la taza, se sirve lo que quede y se envía un mensaje
al consumidor para que sepa porque no se le sirvió un taza completa.
13.e. vaciarCafetera(): pone la cantidad de café actual en cero.
13.f. agregarCafe($cantidad): añade a la cafetera la cantidad de café indicada.
13.g. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
13.h. Crear un script Test_Cafetera que cree un objeto Cafetera e invoque a cada uno de los
métodos implementados. */

class Cafetera{

    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($cantActual, $cantMax)
    {
        $this->capacidadMaxima = $cantMax;
        $this->cantidadActual = $cantActual;
    }


    /**
     * Get the value of capacidadMaxima
     */ 
    public function getCapacidadMaxima()
    {
        return $this->capacidadMaxima;
    }

    /**
     * Set the value of capacidadMaxima
     *
     * @return  self
     */ 
    public function setCapacidadMaxima($capacidadMaxima)
    {
        $this->capacidadMaxima = $capacidadMaxima;

        return $this;
    }

    /**
     * Get the value of cantidadActual
     */ 
    public function getCantidadActual()
    {
        return $this->cantidadActual;
    }

    /**
     * Set the value of cantidadActual
     *
     * @return  self
     */ 
    public function setCantidadActual($cantidadActual)
    {
        $this->cantidadActual = $cantidadActual;

        return $this;
    }

    public function llenarCafetera()
    {
        $this->setCantidadActual($this->getCapacidadMaxima());
        echo $this;
    }

    public function vaciarCafetera()
    {
        $this->setCantidadActual(0);
        echo $this;
    }

    private function porcentajeTaza($cantidad)
    {
        return $porcentaje = ($this->getCantidadActual() * 100) / $cantidad;
    }

    public function servirTaza($cantidad)
    {
        if ($this->getCantidadActual() < $cantidad)
        {
           
            echo "\nNo alcanzo la cantidad de cafe para llenarle la taza, \n solo se lleno el ".$this->porcentajeTaza($cantidad)." de la taza \n" ;
            $this->vaciarCafetera();
        }else{
            $this->setCantidadActual($this->getCantidadActual() - $cantidad);
            echo $this;
        }
        
    }

    public function AgregarCafe($cantidad)
    {
        if ($this->getCapacidadMaxima() < $cantidad + $this->getCantidadActual())
        {
            echo "\nla capacidad maxima es de ".$this->getCapacidadMaxima();
            $this->setCantidadActual($this->getCapacidadMaxima());
        }else{
            $this->setCantidadActual($this->getCantidadActual() + $cantidad);
            echo $this;
        }
    }

    public function __toString()
    {
        return "la capacidad maxima es de ".$this->getCapacidadMaxima(). " y la cantidad actua es de ".$this->getCantidadActual()."\n"; 
    }


}
?>