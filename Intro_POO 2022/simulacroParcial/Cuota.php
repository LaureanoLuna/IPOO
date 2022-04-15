<?php
/* 1. Se registra la siguiente información: número ,monto_cuota , monto_interes y cancelada (atributo que va a
contener un valor true, si la cuota esta paga y false en caso contrario)

2. Método constructor que recibe como parámetros los valores iniciales para los atributos: número,
monto_cuota y monto_interes definidos en la clase. Por defecto todas las cuotas deben ser generadas
como canceladas = false.

3. Los métodos de acceso de cada uno de los atributos de la clase.

4. Redefinir el método _toString para que retorne la información de los atributos de la clase.

5. Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses
que deben ser aplicados.
 */

 class Cuota{

    private $numCuota;
    private $monto_cuota;
    private $monto_interes;
    private $estado;

    public function __construct($cuotaNumero, $montoCuota, $montoInteres)
    {
        $this->numCuota = $cuotaNumero;
        $this->monto_cuota = $montoCuota;
        $this->monto_interes = $montoInteres;
        $this->estado = false;    
    }

    // Implementamos los metodos de acceso a los atributos

    /**
     * Get the value of numCuota
     */ 
    public function getNumCuota()
    {
        return $this->numCuota;
    }

    /**
     * Set the value of numCuota
     *
     * @return  self
     */ 
    public function setNumCuota($numCuota)
    {
        $this->numCuota = $numCuota;

        return $this;
    }

    /**
     * Get the value of monto_cuota
     */ 
    public function getMonto_cuota()
    {
        return $this->monto_cuota;
    }

    /**
     * Set the value of monto_cuota
     *
     * @return  self
     */ 
    public function setMonto_cuota($monto_cuota)
    {
        $this->monto_cuota = $monto_cuota;

        return $this;
    }

    /**
     * Get the value of monto_interes
     */ 
    public function getMonto_interes()
    {
        return $this->monto_interes;
    }

    /**
     * Set the value of monto_interes
     *
     * @return  self
     */ 
    public function setMonto_interes($monto_interes)
    {
        $this->monto_interes = $monto_interes;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

   

    /**
     * Metodo que settea el estado de la cuota se esta es pagada en su totalidad, sino resta el monto pagado setteando el monto de la cuota.
     * 
     * @param int $pago
     */

   /*  public function PagarCuota($pago)
    {
        if ($pago == $this->getMonto_cuota()){
            $this->setEstado(true);
        }else {
            $x = $this->getMonto_cuota() - $pago;
            $this->setMonto_cuota($x);
        }
    }
 */
    public function EstadoCuota()
    {
        if ($this->getEstado()){
            $estadoCuota = "Cancelada";
        }else{
            $estadoCuota = "Adeuda";
        }
        return $estadoCuota;
    }
     /**
     * Metodo que retorna el monto de la cuota mas el interes impuesto por la financiera
     * 
     * @return voil
     */

    public function darMontoFinalCuota()
    {
        $montoCuota = $this->getMonto_cuota();
        $montoInteres = $this->getMonto_interes();
        return ($montoCuota + $montoInteres);
    }

    /**Metodo para la visualizacion de los datos de la clase */

    public function __toString()
    {
        $str = "\nLa cuota N° ". $this->getNumCuota(). 
               "\nEs de $". $this->getMonto_cuota(). 
               "\nEl interes es de $". $this->getMonto_interes(). 
               "\nEl total de la cuota a abonar es de $".$this->darMontoFinalCuota().
               "\nEstado: ". $this->EstadoCuota()."\n";
        return $str;
    }

    /*  metodo por si la cuota no existe 

    public function __destruct()
    {
        echo "\nLa cuota no existe \n";
    } */ 

    
 }
?>