<?php

class Calculadora{

    private $resultado;
    
    public function __construct()
    {
        
        $this->resultado = 0;
        
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function Sumar($valorA,$valorB)
    {
        return $this->resultado = ($valorA + $valorB);
    }

    public function Restar($valorA,$valorB)
    {
        return $this->resultado = ($valorA - $valorB);

    }

    public function Multiplicar($valorA,$valorB)
    {
        return $this->resultado = ($valorA * $valorB);
    }

    public function Dividir($valorA,$valorB)
    {
        return $this->resultado = ($valorA / $valorB);
    }

    public function __toString()
    {
        return $this->getresultado();
    }

    public function __destruct()
    {
        echo $this."\nla cuenta se a borrado\n";
    }


    
}

