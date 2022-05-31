<?php

class Torneo{
    
    private $montoPremio;
    private $coleccionPartidos;

    public function __construct($monto, $coleccion)
    {
        $this->montoPremio = $monto;
        $this->coleccionPartidos = $coleccion;        
    }

    /**
     * Get the value of montoPremio
     */ 
    public function getMontoPremio()
    {
        return $this->montoPremio;
    }

    /**
     * Set the value of montoPremio
     *
     * @return  self
     */ 
    public function setMontoPremio($montoPremio)
    {
        $this->montoPremio = $montoPremio;

    }

    /**
     * Get the value of coleccionPartidos
     */ 
    public function getColeccionPartidos()
    {
        return $this->coleccionPartidos;
    }

    /**
     * Set the value of coleccionPartidos
     *
     * @return  self
     */ 
    public function setColeccionPartidos($coleccionPartidos)
    {
        $this->coleccionPartidos = $coleccionPartidos;

    }

    public function StrColeccion()
    {
        $str = "";
        foreach ($this->getColeccionPartidos() as $key => $value) {
            $str .= "\n--------\n".$value."\n--------\n";
        }
        return $str;
    }

    public function __toString()
    {
        $str = "\n". $this->getMontoPremio(). "\n". $this->StrColeccion();
        return $str;
    }
    
    public function ValidacionDeCategoria($OBJEquipo1, $OBJEquipo2)
    {
        $bool = false;
        if ($OBJEquipo1->getObjCategoriaEquipo() == $OBJEquipo2->getObjCategoriaEquipo() && $OBJEquipo1->getCantidadJugadores() == $OBJEquipo2->getCantidadJugadores()){
            $bool = true;
        } 
        
        return $bool;
    }

    public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipo)
    {   
        $bool = false;
        $colleccionPartidos = $this->getColeccionPartidos(); 
        if ($this->ValidacionDeCategoria($OBJEquipo1, $OBJEquipo2))
        {
            if ($tipo == "Futbol"){
                $objNuevoPartido = new Futbol(1,$fecha,$OBJEquipo1,$OBJEquipo2,0,0);
                $bool = true;
            }
            if ($tipo == "Basquet"){
                $objNuevoPartido = new Basquet(1,$fecha,$OBJEquipo1, $OBJEquipo2,0,0,0);
                $bool = true;
            }
            $colleccionPartidos[] = $objNuevoPartido;
            $this->setColeccionPartidos($colleccionPartidos);            
        }
        return $bool;
    }

    public function EquipoGanador($objPartido)
    {
        if ($objPartido->getGolEquipoA() > $objPartido->getGolEquipoB()){
            $equipoGanador = $objPartido->getObjEquipoA();
        }elseif($objPartido->getGolEquipoA() < $objPartido->getGolEquipoB()){
            $equipoGanador = $objPartido->getObjEquipoB();
        }

        return $equipoGanador;
    }

    public function darGanadores($deporte)
    {
        $equiposGanadores = [];
        foreach ($this->getColeccionPartidos() as $key => $value) {

            if (is_a($value,$deporte)){
               $equiposGanadores[] =  $this->EquipoGanador($value);
            }
        }
        return $equiposGanadores;
    }

    public function calcularPremioPartido($OBJPartido)
    {
        $premioPartido["Equipo Ganador"] = $this->EquipoGanador($OBJPartido);
        $premioPartido["Premio Partido"] = ($OBJPartido->coeficientePartido() * $this->getMontoPremio());

        return $premioPartido;
    }

 
}