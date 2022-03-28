<?php
/* 14. Crea una clase CuentaBancaria con los siguientes atributos: número de cuenta, el DNI del cliente, el
saldo actual y el interés anual que se aplica a la cuenta. Define en la clase los siguientes métodos:
14.a. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.
14.b. Los método de acceso de cada uno de los atributos de la clase.
14.c. actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual
dividido entre 365 aplicado al saldo actual).
14.d. depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.
14.e. retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
14.f. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
14.g. Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada
uno de los métodos implementados */

class CuentaBancaria{

    private $numCuenta;
    private $dniCliente;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numeroCuenta,$numeroDNI,$dineroActual,$interesesAnuales)
    {
        $this->numCuenta = $numeroCuenta;
        $this->dniCliente = $numeroDNI;
        $this->saldoActual = $dineroActual;
        $this->interesAnual = $interesesAnuales;

        
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
     * Get the value of dniCliente
     */ 
    public function getDniCliente()
    {
        return $this->dniCliente;
    }

    /**
     * Set the value of dniCliente
     *
     * @return  self
     */ 
    public function setDniCliente($dniCliente)
    {
        $this->dniCliente = $dniCliente;

        return $this;
    }

    /**
     * Get the value of saldoActual
     */ 
    public function getSaldoActual()
    {
        return $this->saldoActual;
    }

    /**
     * Set the value of saldoActual
     *
     * @return  self
     */ 
    public function setSaldoActual($saldoActual)
    {
        $this->saldoActual = $saldoActual;

        return $this;
    }

    /**
     * Get the value of interesAnual
     */ 
    public function getInteresAnual()
    {
        return $this->interesAnual;
    }

    /**
     * Set the value of interesAnual
     *
     * @return  self
     */ 
    public function setInteresAnual($interesAnual)
    {
        $this->interesAnual = $interesAnual;

        return $this;
    }

    public function InteresDiario()
    {
        return (($this->getSaldoActual()*($this->getInteresAnual() / 365)) / 100);
    }

    public function ActualizarSaldo()
    {
        $this->setSaldoActual($this->getSaldoActual() + $this->InteresDiario());
        echo $this;
    }

    public function Depositar($cant)
    {
        $this->setSaldoActual($this->getSaldoActual()+$cant);
    }

    public function Retirar($cant)
    {
        if ($this->getSaldoActual() > $cant)
        {
            $this->setSaldoActual($this->getSaldoActual() - $cant);
            echo "\nsu saldo es: $".$this->getSaldoActual()."\n";
        }else{
            echo "\nSu saldo es insuficiente para retirar ".$cant."\n";
        }
    }

    public function __toString()
    {
        return "\nEl numero de cuenta es: ".$this->getNumCuenta()."\nEl DNI del titular es: ".$this->getDniCliente()."\nSu saldo es: \n".$this->getSaldoActual()."\nTiene un interes diario de $".$this->InteresDiario()." ,siendo un interes anual de %".$this->getInteresAnual();
    }


}
?>