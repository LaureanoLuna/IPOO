<?php

class Basquet extends Partido{

    private $faltasPartido;

    public function __construct($idPartido, $fechaPartido,$equipoA,$equipoB,$golA,$golB, $faltas)
    {
        parent:: __construct($idPartido, $fechaPartido,$equipoA,$equipoB,$golA,$golB);
        $this->faltasPartido = $faltas;
    }
    

    /**
     * Get the value of faltasPartido
     */ 
    public function getFaltasPartido()
    {
        return $this->faltasPartido;
    }

    /**
     * Set the value of faltasPartido
     *
     * @return  self
     */ 
    public function setFaltasPartido($faltasPartido)
    {
        $this->faltasPartido = $faltasPartido;

    }

    public function __toString()
    {
        $str = parent :: __toString();
        $str .= "\nSe realizaron ". $this->getFaltasPartido(). " Faltas";
        return $str;
    }

    public function coeficientePartido()
    {
        $coef = parent :: coeficientePartido();
        $coef-= ($this->getFaltasPartido() * 0.75);
        return $coef;
    }


}
  