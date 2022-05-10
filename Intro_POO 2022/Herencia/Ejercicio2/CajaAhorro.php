<?php

class CajaAhorro extends Cuenta{

    public function __construct($numCuenta,$saldoCuenta, $objCliente)
    {
        parent::__construct($numCuenta,$saldoCuenta,$objCliente);
                
    }

    public function __toString()
    {
        $str = parent::__toString();
        return $str;
    }
}

?>