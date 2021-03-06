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

   /*  private function Prestamos ()
    {
        $arrayPrestamos = $this->getColeccionPrestamos();
        foreach ($arrayPrestamos as $key => $value) {
            $prestamos = "\n".$value."\n";
            return $prestamos;
        }
       
       
    } */

    public function incorporarPrestamo($newPrestamo)
    {
        $arrayPrestamos = $this->getColeccionPrestamos();
        $arrayPrestamos[] = $newPrestamo;
        $this->setColeccionPrestamos($arrayPrestamos);
    }

    public function validacionPrestamosOtorgar()
    {
        $arrayPrestamos = $this->getColeccionPrestamos();
        
        foreach ($arrayPrestamos as $key => $value) {
            
            $cuotasOtorgadas = $value->getColeccionCuotas();
            
            if(empty($cuotasOtorgadas)){

                $arregloCalificado[] = $value;
            }
        }
        return $arregloCalificado;
    }

   

   

    private function MontoNetoPersona($newPrestamo)
    {
        $validacion = false;         
        $cantCuotas = $newPrestamo->getCantCuotas();
        $montoPrestamo = $newPrestamo->getMontoPrestamo();
                      
        $montoNetoPers =$newPrestamo->getObjPersona()->getNeto();
               
                

                if (($montoPrestamo / $cantCuotas) < (($montoNetoPers * 40)/100)){

                    $validacion = true;
                }
        
        
       
        return $validacion;
    }

    public function otorgarPrestamoSiCalifica()
    {
        $prestamosClalificados = $this->validacionPrestamosOtorgar();
      
       foreach ($prestamosClalificados as $key => $value) {
           
           if ($this->MontoNetoPersona($value)){

            $x = $value;
           $value->OtorgarPrestamo($x);

            //$this->getColeccionPrestamos()->OtorgarPrestamo($value);
              
         }
       }

        
    }

    public function informarCuotaPagar($idPrestamo)
    {
       $arrayPrestamos = $this->getColeccionPrestamos();
       foreach ($arrayPrestamos as $key => $value) {

        if ($value->getIdentificacion() == $idPrestamo){

            $cuotaPagar = $value->darSiguienteCuotaPagar();
        }          

       }
       return $cuotaPagar;
    }

    private function stringPrestamos(){

        $prestamos = "";
        foreach ($this->getcoleccionPrestamos() as $key => $value ) {
            
            $prestamos .= $value;

            
        }
        return $prestamos;
    }

    public function __toString()
    {
        return ( "\nDenominacion: ". $this->getDenominacion().
                "\nDireccion: ". $this->getDireccion().
              "\nPrestamos Otorgados: ". $this->stringPrestamos());
    }


}

?>