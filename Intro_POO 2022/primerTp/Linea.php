<?php
/* 12. Definir una clase Linea con cuatro atributos: pA , p B, pC y pD donde ( pA , p B ) y ( pC,pD ) son 2 puntos
por los que pasa la línea en un espacio de dos dimensiones. La clase dispondrá de los siguientes métodos:
12.a. Método constructor _ _construct() que recibe como parámetros las coordenadas de los puntos.
12.b. Los métodos de acceso de cada uno de los atributos de la clase.
12.c. mueveDerecha($d): Desplaza la línea a la derecha la distancia(d) que se recibe por parámetro.
12.d. mueveIzquierda($d): Desplaza la línea a la izquierda la distancia(d) que se recibe por parámetro.
12.e. mueveArriba($d): Desplaza la línea hacia arriba la distancia que se recibe por parámetro.
12.f. mueveAbajo($d): Desplaza la línea hacia abajo la distancia que se recibe por parámetro.
12.g. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
12.h. Crear un script Test_Linea que cree un objeto Linea e invoque a cada uno de los
métodos implementados. */

class Linea{

    private $pA;
    private $pB;
    private $pC;
    private $pD;

    public function __construct($puntoA, $puntoB, $puntoC, $puntoD)
    {
        $this->pA = $puntoA;
        $this->pB = $puntoB;
        $this->pC = $puntoC;
        $this->pD = $puntoD;
    }
    



   

        /**
     * Get the value of pA
     */ 
    public function getPA()
    {
        return $this->pA;
    }

    /**
     * Set the value of pA
     *
     * @return  self
     */ 
    public function setPA($pA)
    {
        $this->pA = $pA;

        return $this;
    }

    /**
     * Get the value of pB
     */ 
    public function getPB()
    {
        return $this->pB;
    }

    /**
     * Set the value of pB
     *
     * @return  self
     */ 
    public function setPB($pB)
    {
        $this->pB = $pB;

        return $this;
    }

    /**
     * Get the value of pC
     */ 
    public function getPC()
    {
        return $this->pC;
    }

    /**
     * Set the value of pC
     *
     * @return  self
     */ 
    public function setPC($pC)
    {
        $this->pC = $pC;

        return $this;
    }

    /**
     * Get the value of pD
     */ 
    public function getPD()
    {
        return $this->pD;
    }

    /**
     * Set the value of pD
     *
     * @return  self
     */ 
    public function setPD($pD)
    {
        $this->pD = $pD;

        return $this;
    }

        public function MueveDerecha($distancias)
        {
            $this->setPA($this->getPA() + $distancias);
            $this->setPC($this->getPC() + $distancias);
            echo $this;
        }

        public function MueveIzquierda($distancias)
        {
            $this->setPA($this->getPA() - $distancias);
            $this->setPC($this->getPC() - $distancias);
            echo $this;
        }

        public function MueveArriba($distancias)
        {
            $this->setPB($this->getPB() + $distancias);
            $this->setPD($this->getPD() + $distancias);
            echo $this;
        }

        public function MueveAbajo($distancias)
        {
            $this->setPB($this->getPB() - $distancias);
            $this->setPD($this->getPD() - $distancias);
            echo $this;
        }


        public function __toString()
        {
            return "\n(". $this->getPA().",". $this->getPB().")"." "."(". $this->getPC().",". $this->getPD().")\n";
        }

        public function __destruct()
        {
            echo "\nLa linea se corto \n";
        }



    
}
?>