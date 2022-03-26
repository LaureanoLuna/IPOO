<?php

class Reloj{

    private $hora;
    private $minuto;
    private $segundo;

    public function __construct() {
        $this->hora = 23;
        $this->minuto = 58;
        $this->segundo = 58;
    }

   

    /**
     * Get the value of hora
     */ 
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Get the value of minuto
     */ 
    public function getMinuto()
    {
        return $this->minuto;
    }

    /**
     * Get the value of segundo
     */ 
    public function getSegundo()
    {
        return $this->segundo;
    }

    public function setHora($num)
    {
        return $this->hora = $num;
    }

    public function setMinuto($num)
    {
        return $this->minuto = $num;
    }

    public function setSegundo($num)
    {
        return $this->segundo = $num;
    }

    public function puesta_en_cero()
    {
        $this->setSegundo(0);
        $this->setMinuto(0);
        $this->setHora(0);
    }


    public function Incremento_Reloj_Segundos()
    {
        $a = $this->getSegundo() + 1;
       return  $this->setSegundo($a);
    }

    public function Incremento_Reloj_Minutos()
    {
        return $this->setMinuto($this->getMinuto() + 1);
    }

    public function Incremento_Reloj_Hora()
    {
        return $this->setHora($this->getHora() + 1);
    }


    public function __toString()
    {
        return $this->getHora()." :: ".$this->getMinuto()." :: ".$this->getSegundo()."\n";
    }

    public function __destruct()
    {
        echo "\n El cronometro esta en cero \n";
    }
}

