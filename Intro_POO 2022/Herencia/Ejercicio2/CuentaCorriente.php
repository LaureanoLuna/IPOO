<?php

class CuentaCorriente extends Cuenta{

    private $montoMaximoDescubierto;

    public function __construct($numCuenta, $saldo, $objCliente, $maximoDescubierto)
    {
        parent::__construct($numCuenta,$saldo,$objCliente);
        
        $this->montoMaximoDescubierto = $maximoDescubierto;
    }
    

    /**
     * Get the value of montoMaximoDescubierto
     */ 
    public function getMontoMaximoDescubierto()
    {
        return $this->montoMaximoDescubierto;
    }

    /**
     * Set the value of montoMaximoDescubierto
     *
     * @return  self
     */ 
    public function setMontoMaximoDescubierto($montoMaximoDescubierto)
    {
        $this->montoMaximoDescubierto = $montoMaximoDescubierto;

        return $this;
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str.= "\nMonto Maximo Descubierto: ". $this->getMontoMaximoDescubierto();
        return $str;
    }
}
?>