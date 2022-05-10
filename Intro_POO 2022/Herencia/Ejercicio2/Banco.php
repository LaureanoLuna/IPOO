<?php

class Banco{

    private $coleccionCuentaCorriente;
    private $coleccionCajaAhorro;
    private $ultimoValorCuentaAsignado;
    private $coleccionCliente;

    public function __construct($arregloCuentasCorrientes, $arregloCajasAhorro,$arregloCliente)
    {
        $this->coleccionCajaAhorro = $arregloCajasAhorro;
        $this->coleccionCuentaCorriente = $arregloCuentasCorrientes;
        $this->ultimoValorCuentaAsignado = 0;
        $this->coleccionCliente = $arregloCliente;        
    }

    

    /**
     * Get the value of coleccionCuentaCorriente
     */ 
    public function getColeccionCuentaCorriente()
    {
        return $this->coleccionCuentaCorriente;
    }

    /**
     * Set the value of coleccionCuentaCorriente
     *
     * @return  self
     */ 
    public function setColeccionCuentaCorriente($coleccionCuentaCorriente)
    {
        $this->coleccionCuentaCorriente = $coleccionCuentaCorriente;

        return $this;
    }

    /**
     * Get the value of coleccionCajaAhorro
     */ 
    public function getColeccionCajaAhorro()
    {
        return $this->coleccionCajaAhorro;
    }

    /**
     * Set the value of coleccionCajaAhorro
     *
     * @return  self
     */ 
    public function setColeccionCajaAhorro($coleccionCajaAhorro)
    {
        $this->coleccionCajaAhorro = $coleccionCajaAhorro;

        return $this;
    }

    /**
     * Get the value of ultimoValorCuentaAsignado
     */ 
    public function getUltimoValorCuentaAsignado()
    {
        return $this->ultimoValorCuentaAsignado;
    }

    /**
     * Set the value of ultimoValorCuentaAsignado
     *
     * @return  self
     */ 
    public function setUltimoValorCuentaAsignado($ultimoValorCuentaAsignado)
    {
        $this->ultimoValorCuentaAsignado = $ultimoValorCuentaAsignado;

        return $this;
    }

    /**
     * Get the value of coleccionCliente
     */ 
    public function getColeccionCliente()
    {
        return $this->coleccionCliente;
    }

    /**
     * Set the value of coleccionCliente
     *
     * @return  self
     */ 
    public function setColeccionCliente($coleccionCliente)
    {
        $this->coleccionCliente = $coleccionCliente;

        return $this;
    }

    public function StrColleccion($collecion)
    {
      
        $strColleccion = " ";
        foreach ($collecion as $key => $value) {
            $strColleccion .= "\n".$value;
        }

        return $strColleccion;
    }

    public function __toString()
    {
        $cuentasCorrientes = $this->getColeccionCuentaCorriente();
        $cuentasCAjaAhorro = $this->getColeccionCajaAhorro();
        $clientes = $this->getColeccionCliente();
        $str = "\nCuentas Corrietes: \n". $this->StrColleccion($cuentasCorrientes). 
                "\nCuentas Caja Ahorro: \n".$this->StrColleccion($cuentasCAjaAhorro). 
                "\Clientes: \n". $this->StrColleccion($clientes).
                "\nUltimo VaLor Agregado es: ". $this->getUltimoValorCuentaAsignado();
        return $str;        
    }

    public function incorporarCliente($objCliente)
    {
        
        $clientesBanco = $this->getColeccionCliente();
        $clientesBanco[] = $objCliente;
        $this->setColeccionCliente($clientesBanco);
        return true;
    }

   /*  public function ValidacionCliente ($numCliente)
    {
        $objCliente = $this->getColeccionCliente();
        while ($bool) {
            $cliente = $objCliente->get
        }
    } */

    public function  incorporarCuentaCorriente($numeroCliente)
    {
        $objCliente = $this->getColeccionCliente();
        $bool = true;
        $i = 0;
        while ($bool) {
            $cliente = $objCliente[$i]->getObjCliente();
            $nroCliente = $cliente->getNumCliente;
            if ($nroCliente == $numeroCliente){
                $cuentasCorrientes = $this->getColeccionCuentaCorriente();
                $numCuenta = $this->getUltimoValorCuentaAsignado();
                $objCuenta = new CuentaCorriente ($numCuenta,0,$cliente,1000);
                $cuentasCorrientes[] = $objCuenta;
                $this->setColeccionCuentaCorriente($cuentasCorrientes);
                $ultimoValor = $this->getUltimoValorCuentaAsignado();
                $this->setUltimoValorCuentaAsignado($ultimoValor + 1);              
                $bool = false;                
            }
            $i++;
        }
    }

    public function incorporarCajaAhorro($numeroCliente)
    {
        
    }
}
?>