<?php

/* 10.c. Diseñar e implementar la clase Fecha.

 *La clase deberá disponer de los atributos mínimos y necesarios para almacenar el día, el mes y el año

 * además de métodos que devuelvan un String con la fecha en forma abreviada (16/02/2000) y extendida (16 de febrero de 2000) .
  
 * Implementar una función incremento, que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, resultado
   de incrementar la fecha recibida por parámetro en el numero de días definido por el parámetro entero.

 * Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, salvo que lo sean de  cuatrocientos, en cuyo caso si son bisiestos.

 * Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia */

class Fecha{

    private $dia;
    private $mes;
    private $anio;
    

    public function __construct($dia, $mes, $anio)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this-> anio = $anio;
        
        
    }


    /**
     * Get the value of dia
     */ 
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set the value of dia
     *
     * @return  self
     */ 
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get the value of mes
     */ 
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set the value of mes
     *
     * @return  self
     */ 
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get the value of anio
     */ 
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set the value of anio
     *
     * @return  self
     */ 
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

       

    /** Método que devuelvan un String con la fecha en forma abreviada (16/02/2000) 
     * 
     * @param number $dia
     * @param number $mes
     * @param number $anio
     * @return String 
    */
    public function FechaAbrebiada($dia, $mes, $anio)
    {
        $this->setDia($dia);
        $this->setMes($mes);
        $this->setAnio($anio);
       
    }

   
    /**Método que devuelvan un String con la fecha en forma extendida (16 de Febrero del 2000)
     * 
     * @param number $dia
     * @param number $mes
     * @param number $anio
     * 
     * @return String 
     */
    public function FechaExtendida()
    {
        $arregloMesesAnio=["Enero", "Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        $this->setMes($arregloMesesAnio[$this->getMes() - 1]);
        $fechaExtendiad = $this->getDia(). " de ". $this->getMes(). " del ". $this->getAnio(). "\n";
        echo $fechaExtendiad;
                    
    }

    /** función incremento, que reciba como parámetros un entero
     * 
     * @param int $dia
     * 
     * @return number
     * 
    */
    public function incrementa_un_dia($dia)
    {
        return $this->setDia($this->getDia() + $dia);
    }

    public function esBiciesto()
    {
        $resolucion = ($this->getAnio() % 4 == 0 && $this->getAnio() % 100 != 0 && $this->getAnio() % 400 == 0);
        return ($resolucion);
    }

    public function Validacion_Incremento()
    {
        $validacion = true;
        if ($this->getDia() == 31 && $this->getMes() == 1 ||$this->getDia() == 31 && $this->getMes() == 3 ||$this->getDia() == 31 && $this->getMes() == 5 ||$this->getDia() == 31 && $this->getMes() == 7 || $this->getDia() == 31 && $this->getMes() == 8 ||$this->getDia() == 31 && $this->getMes() == 10 ||$this->getDia() == 31 && $this->getMes() ==12)
        {
            echo " No se puede Incrementar \n";
            $validacion = false;
        }
        if ($this->getDia() == 30 &&  $this->getMes() == 4 ||$this->getDia() == 30 && $this->getMes() == 6 ||$this->getDia() == 30 && $this->getMes() == 9 ||$this->getDia() == 30 && $this->getMes() == 11)
        {
            echo " No se puede Incrementar \n";
            $validacion = false;
        }
        if (!($this->esBiciesto()) && $this->getMes() == 2 && $this->getDia() == 28)
        {
            echo " No se puede Incrementar \n";
            $validacion = false;
        }

        return $validacion;
    }
    
    public function Incremento($dia)
    {
        if ($this->Validacion_Incremento() && $this->getMes() != 2)
        {
            if ($this->getDia() + $dia >= 30)
            {
                $this->setDia(($this->getDia()+ $dia) - 30);
                if ($this->getMes() == 12)
                {
                    $this->setMes(1);
                    $this->setAnio($this->getAnio() + 1);
                }else {
                    $this->setMes($this->getMes() + 1);
                }
                
            }else{
                $this->incrementa_un_dia($dia);
            }
            if ($this->getDia() + $dia >= 31)
            {
                $this->setDia(($this->getDia()+ $dia) - 31);
                if ($this->getMes() == 12)
                {
                    $this->setMes(1);
                    $this->setAnio($this->getAnio() + 1);
                }else {
                    $this->setMes($this->getMes() + 1);
                }
                
            }else{
                $this->incrementa_un_dia($dia);
            }
        }
        if ($this->getMes() == 2 && $this->esBiciesto() && $this->getDia() < 29)
        {
            $this->incrementa_un_dia($dia);
        }
        if (!($this->esBiciesto()))
        {
            $this->Incremento($dia);
        }

        echo $this;
    }

    public function desarmaFecha($fecha)
    {
        return $fechaDesarmada = explode("/",$fecha);
    }

    public function nuevaFecha($masDias, $dd,$mm,$aaaa)
    {
        
        $nuevaFecha = new Fecha($dd,$mm,$aaaa);
        $nuevaFecha->Incremento($masDias);
        echo $nuevaFecha;         
    }
    
    public function __toString()
    {
        
        return $this->getDia(). " / ". $this->getMes(). " / ". $this->getAnio(). "\n";
    }

    public function __destruct()
    {
        echo " \nLa fecha no existe \n";
    }

    
}