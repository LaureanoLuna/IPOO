<?php

class Futbol extends Partido{
    
    public function __construct($idPartido, $fechaPartido, $equipoA,$equipoB,$golA,$golB)
    {
        parent::__construct($idPartido, $fechaPartido, $equipoA,$equipoB,$golA,$golB);        
    }

    public function __toString()
    {
        $str = parent::__toString();
        return $str;
    }

    public function coeficientePartido()
    {
        $coef = parent :: coeficientePartido();
        $obj = $this->getObjEquipoA()->getObjCategoriaEquipo();
        $coef += ($coef * $obj->Categoria());

        return $coef;
    }
}