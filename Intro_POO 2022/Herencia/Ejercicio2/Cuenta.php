<?php

class Cuenta{
    private $numCuenta;
    private $saldoCuenta;
    private $objCliente;

    public function __construct($numCuenta, $saldo, $objCliente)
    {
        $this->numCuenta = $numCuenta;
        $this->saldoCuenta = $saldo;
        $this->$objCliente = $objCliente;        
    }

    

    /**
     * Get the value of numCuenta
     */ 
    public function getNumCuenta()
    {
        return $this->numCuenta;
    }

    /**
     * Set the value of numCuenta
     *
     * @return  self
     */ 
    public function setNumCuenta($numCuenta)
    {
        $this->numCuenta = $numCuenta;

        return $this;
    }

    /**
     * Get the value of saldoCuenta
     */ 
    public function getSaldoCuenta()
    {
        return $this->saldoCuenta;
    }

    /**
     * Set the value of saldoCuenta
     *
     * @return  self
     */ 
    public function setSaldoCuenta($saldoCuenta)
    {
        $this->saldoCuenta = $saldoCuenta;

        return $this;
    }

    /**
     * Get the value of objCliente
     */ 
    public function getObjCliente()
    {
        return $this->objCliente;
    }

    /**
     * Set the value of objCliente
     *
     * @return  self
     */ 
    public function setObjCliente($objCliente)
    {
        $this->objCliente = $objCliente;

        return $this;
    }

    public function __toString()
    {
        $str = "\nNumero de Cuenta es: ". $this->getNumCuenta().
                "\nSaldo: ". $this->getSaldoCuenta().
                "\n". $this->objCliente;
        return $str;
    }

    public function saldoCuenta()
    {
        $saldo = $this->getSaldoCuenta();
        return $saldo;
    }

    public function realizarDeposito($monto)
    {
        $monto += $this->getSaldoCuenta();

        $this->setSaldoCuenta($monto);
    }

    public function realizarRetiro($monto)
    {
        $saldo = $this->getSaldoCuenta();
        $validacion = false;
        if ($saldo > $monto){
            $this->setSaldoCuenta($saldo - $monto);
            $validacion = true;
        }
        return $validacion;
    }



}