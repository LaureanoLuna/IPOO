<?php

class Financiera{

    private $denominacion;
    private $direccion;
    private $coleccionPrestamos;

    public function __construct($denominacionFinanciera, $direFinanciera)
    {
        $this->denominacion = $denominacionFinanciera;
        $this->direccion = $direFinanciera;
        $this->coleccionPrestamos;
    }

    //iMPLEMENTAMOS LOS METODOS DE ACCESO

    /**
     * Get the value of denominacion
     */ 
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set the value of denominacion
     *
     * @return  self
     */ 
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    

    /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get the value of coleccionPrestamos
     */ 
    public function getColeccionPrestamos()
    {
        return $this->coleccionPrestamos;
    }

    /**
     * Set the value of coleccionPrestamos
     *
     * @return  self
     */ 
    public function setColeccionPrestamos($coleccionPrestamos)
    {
        $this->coleccionPrestamos = $coleccionPrestamos;

        return $this;
    }

    private function Prestamos ()
    {
        $arrayPrestamos = $this->getColeccionPrestamos();
        foreach ($arrayPrestamos as $key => $value) {
            $prestamos = "\n".$value."\n";
        }
        return $prestamos;
    }

    public function incorporarPrestamo($newPrestamo)
    {
        $arrayPrestamos = $this->getColeccionPrestamos();
        $arrayPrestamos[] = $newPrestamo;
        $this->setColeccionPrestamos($arrayPrestamos);
    }

   

    private function estaPrestamoRealizado($newPrestamo)
    {
        $validacion = true;
        $arrayPrestamos = $this->getColeccionPrestamos();
        foreach ($arrayPrestamos as $key => $value) {
            if ($value->getIdentificacion() == $newPrestamo->getIdentificacion()) {
                $validacion = false;
            }
        }
        return $validacion;
    }

    private function MontoNetoPersona($newPrestamo)
    {
        $cantCuotas = $newPrestamo->getCantCuotas();
        $montoPrestamo = $newPrestamo->getMontoPrestamo();
        $montoNetoPers = $newPrestamo->getObjPersona()->getNeto();
        $validacion = false;

        if (($montoPrestamo / $cantCuotas) < ($montoNetoPers * 0.4)){

            $validacion = true;
        }
       
        return $validacion;
    }

    public function otorgarPrestamoSiCalifica($newPrestamo)
    {
        if ($this->estaPrestamoRealizado($newPrestamo) && $this->MontoNetoPersona($newPrestamo)){

           $nuevoPrestamos = $newPrestamo->OtorgarPrestamo($newPrestamo);
           $this->incorporarPrestamo($nuevoPrestamos);

        }
    }

    public function informarCuotaPagar($idPrestamo)
    {
       $arrayPrestamos = $this->getColeccionPrestamos();
       foreach ($arrayPrestamos as $key => $value) {

        if ($value->getIdentificacion() == $idPrestamo){

            $value->darSiguienteCuotaPagar();
        }          

       }
    }

    public function __toString()
    {
        return ( "Denominacion: ". $this->getDenominacion().
                "Direccion: ". $this->getDireccion().
                "Prestamos Otorgados: ". $this->Prestamos());
    }


}

?>