<?php

/**11. Crear una clase Cuadrado que modele cuadrados por medio de cuatro puntos (los vértices). Puede utilizar
*arreglos asociativos para implementar cada uno de los vértices. La clase dispondrá de los siguientes métodos:
* 11.a. Método constructor _ _construct () que recibe como parámetros las coordenadas de los puntos.
* 11.b. Los métodos de acceso de cada uno de los atributos de la clase.
* 11.c. area(): método que calcula el área del cuadrado.
* 11.d. desplazar($d): método que recibe por parámetro un punto y desplaza el cuadrado en el plano
*desde su punto mas inferior izquierdo.
* 11.e. aumentarTamaño($t): método que recibe por parámetro el tamaño que debe aumentar el cuadrado.
* 11.f. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
* 11.g. Crear un script Test_Cuadrado que cree un objeto Cuadrado e invoque a cada uno de los
*métodos implementados
 */

 class Cuadrado{

    private $vertice_1;
    private $vertice_2;
    private $vertice_3;
    private $vertice_4;

    public function __construct($v1,$v2,$v3,$v4)
    {
        $this->vertice_1 = $v1;
        $this->vertice_2 = $v2;
        $this->vertice_3 = $v3;
        $this->vertice_4 = $v4;
        
    }

    

    /**
     * Get the value of vetice_1
     */ 
    public function getVertice_1()
    {
        return $this->vertice_1;
    }

    /**
     * Set the value of vetice_1
     *
     * @return  self
     */ 
    public function setVertice_1($vertice_1)
    {
        $this->vetice_1 = $vertice_1;
        

        return $this;
    }

    /**
     * Get the value of vetice_2
     */ 
    public function getVertice_2()
    {
        return $this->vertice_2;
    }

    /**
     * Set the value of vetice_2
     *
     * @return  self
     */ 
    public function setVertice_2($vertice_2)
    {
        $this->vetice_2= $vertice_2;
        

        return $this;
    }

    /**
     * Get the value of vetice_3
     */ 
    public function getVertice_3()
    {
        return $this->vertice_3;
    }

    /**
     * Set the value of vetice_3
     *
     * @return  self
     */ 
    public function setVertice_3($vertice_3)
    {
        $this->vetice_3 = $vertice_3;

        return $this;
    }

    /**
     * Get the value of vetice_4
     */ 
    public function getVertice_4()
    {
        return $this->vertice_4;
    }

    /**
     * Set the value of vetice_4
     *
     * @return  self
     */ 
    public function setVertice_4($vertice_4)
    {
        $this->vetice_4 = $vertice_4;

        return $this;
    }

    public function Area()
    {
        $areaCuadrado = ($this->getVertice_2())["X"] - ($this->getVertice_1())["X"];

        echo "\nEl area es: ".pow($areaCuadrado,2)."\n";
        
    }

    public function Desplazar($coordenas)
    {
     
       $ver1 ["X"] = ($this->getVertice_1())["X"] + $coordenas["X"];
       $ver1 ["Y"] = ($this->getVertice_1())["Y"] + $coordenas["Y"];
       $ver2 ["X"] = ($this->getVertice_2())["X"] + $coordenas["X"];
       $ver2 ["Y"] = ($this->getVertice_2())["Y"] + $coordenas["Y"];
       $ver3 ["X"] = ($this->getVertice_3())["X"] + $coordenas["X"];
       $ver3 ["Y"] = ($this->getVertice_3())["Y"] + $coordenas["Y"];
       $ver4 ["X"] = ($this->getVertice_4())["X"] + $coordenas["X"];
       $ver4 ["Y"] = ($this->getVertice_4())["Y"] + $coordenas["Y"]; 

       return $nuevoCuadrado = new Cuadrado($ver1,$ver2,$ver3,$ver4); 
       
    }

    public function Aumentar($valorAumento)
    {
        $ver1 ["X"] = ($this->getVertice_1())["X"] - $valorAumento;
        $ver1 ["Y"] = ($this->getVertice_1())["Y"] + $valorAumento;
        $ver2 ["X"] = ($this->getVertice_2())["X"] + $valorAumento;
        $ver2 ["Y"] = ($this->getVertice_2())["Y"] + $valorAumento;
        $ver3 ["X"] = ($this->getVertice_3())["X"] - $valorAumento;
        $ver3 ["Y"] = ($this->getVertice_3())["Y"] - $valorAumento;
        $ver4 ["X"] = ($this->getVertice_4())["X"] - $valorAumento;
        $ver4 ["Y"] = ($this->getVertice_4())["Y"] - $valorAumento; 

        return $nuevoCuadrado = new Cuadrado($ver1,$ver2,$ver3,$ver4);
    }

    public function __toString()
    {
        $a = $this->getVertice_1();
        $b = $this->getVertice_2();
        $c = $this->getVertice_3();
        $d = $this->getVertice_4();
        return "\n(".$a["X"].",".$a["Y"].")"."\n"."(".$b["X"].",".$b["Y"].")"."\n(".$c["X"].",".$c["Y"].")"."\n(".$d["X"].",".$d["Y"].")";
    }
 }
 
?>