<?php

/* 1. Se registra la siguiente información: identificación, código del electrodoméstico, fecha otorgamiento,
monto, cantidad_de_cuotas, taza de interés, la colección de cuotas y la referencia a la persona que solicito el préstamo.

2. Método constructor que recibe como parámetros los siguientes valores: identificación, monto, cantidad
de cuotas, taza de interés y la referencia a la persona que solicito el préstamo. El constructor debe asignar los valores recibidos a las variables instancias que corresponda.

3. Los métodos de acceso de cada uno de los atributos de la clase.

4. Redefinir el método _toString para que retorne la información de los atributos de la clase.

5. Implementar el método privado calcularInteresPrestamo(numCuota) que recibe por parámetro el numero de la cuota y calcula el importe del interés sobre el saldo deudor.
Por ejemplo si el préstamo tiene 5 cuotas, el monto total = 50000 y el interés 0.1% entonces el monto del
interés sobre saldo deudor que debe calcularse para cada una de las cuotas deben ser los siguientes:

 interés cuota 1: 50 000 * 0.01 = 500
 interés cuota 2: ( 50 000- (50 000 /5) ) * 0.01 = 400
 interés cuota 3: ( 50 000 - ( (50 000 /5)*2) ) * 0.01 = 300
 interés cuota 4: (50 000 - ( (50 000 /5)*3 )) * 0.01 = 200
 interés cuota 5: (50 000 - ( (50 000 /5)*4 )) * 0.01 = 100

6. Implementar el método otorgarPrestamo que setea la variable instancia fecha otorgamiento, con la
fecha actual (puede utilizar el valor retornado por la función de PHP getdate()) y genera cada una de las
cuotas dependiendo el valor almacenado en la variable instancia “cantidad_de_cuotas” y monto. El
importe total de la cuota debe ser calculado de la siguiente manera: (monto / cantidad_de_cuotas )
y el monto correspondiente al interés debe ser el valor retornado por el método calcularInteresPrestamo(numeroCuota) implementado en el inciso anterior.
interes cuota numCuota = ( monto - (( monto/ cantidad_de_cuotas) * numCuota -1)) * taza_de_interés/0.01

7. Implementar el método darSiguienteCuotaPagar método que retorna la referencia a la siguiente cuota
que debe ser abonada de un préstamo, si el préstamo tiene todas sus cuotas canceladas retorna null.
 */


 class Prestamo{
     
    private $identificacion;
    private $codElectrodomestico;
    private $fechaOtorgamiento;
    private $montoPrestamo;
    private $cantCuotas;
    private $tazaInteres;
    private $coleccionCuotas;
    private $objPersona;

    public function __construct($identificacion, $monto, $cantidadCuotas, $taza_Interes, $personaSolicitante)
    {
        $this->identificacion = $identificacion;
        $this->codElectrodomestico;
        $this->fechaOtorgamiento;
        $this->montoPrestamo = $monto;
        $this->cantCuotas = $cantidadCuotas;
        $this->tazaInteres = $taza_Interes;
        $this->coleccionCuotas;
        $this->objPersona = $personaSolicitante;
    }

    /**
     * Get the value of identificacion
     */ 
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set the value of identificacion
     *
     * @return  self
     */ 
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get the value of codElectrodomestico
     */ 
    public function getCodElectrodomestico()
    {
        return $this->codElectrodomestico;
    }

    /**
     * Set the value of codElectrodomestico
     *
     * @return  self
     */ 
    public function setCodElectrodomestico($codElectrodomestico)
    {
        $this->codElectrodomestico = $codElectrodomestico;

        return $this;
    }

    /**
     * Get the value of fechaOtorgamiento
     */ 
    public function getFechaOtorgamiento()
    {
        return $this->fechaOtorgamiento;
    }

    /**
     * Set the value of fechaOtorgamiento
     *
     * @return  self
     */ 
    public function setFechaOtorgamiento($fechaOtorgamiento)
    {
        $this->fechaOtorgamiento = $fechaOtorgamiento;

        return $this;
    }

    /**
     * Get the value of montoPrestamo
     */ 
    public function getMontoPrestamo()
    {
        return $this->montoPrestamo;
    }

    /**
     * Set the value of montoPrestamo
     *
     * @return  self
     */ 
    public function setMontoPrestamo($montoPrestamo)
    {
        $this->montoPrestamo = $montoPrestamo;

        return $this;
    }

    /**
     * Get the value of cantCuotas
     */ 
    public function getCantCuotas()
    {
        return $this->cantCuotas;
    }

    /**
     * Set the value of cantCuotas
     *
     * @return  self
     */ 
    public function setCantCuotas($cantCuotas)
    {
        $this->cantCuotas = $cantCuotas;

        return $this;
    }

    /**
     * Get the value of tazaInteres
     */ 
    public function getTazaInteres()
    {
        return $this->tazaInteres;
    }

    /**
     * Set the value of tazaInteres
     *
     * @return  self
     */ 
    public function setTazaInteres($tazaInteres)
    {
        $this->tazaInteres = $tazaInteres;

        return $this;
    }

    /**
     * Get the value of coleccionCuotas
     */ 
    public function getColeccionCuotas()
    {
        return $this->coleccionCuotas;
    }

    /**
     * Set the value of coleccionCuotas
     *
     * @return  self
     */ 
    public function setColeccionCuotas($coleccionCuotas)
    {
        $this->coleccionCuotas = $coleccionCuotas;

        return $this;
    }

    /**
     * Get the value of objPersona
     */ 
    public function getObjPersona()
    {
        return $this->objPersona;
    }

    /**
     * Set the value of objPersona
     *
     * @return  self
     */ 
    public function setObjPersona($objPersona)
    {
        $this->objPersona = $objPersona;

        return $this;
    }

    /**
     * Recibe por parámetro el numero de la cuota y calcula el importe del interés sobre el saldo deudor.
     * 
     * @param int $numCuota
     * @return $int
     */

    private function calcularInteresPrestamo($numCuota)
    {
        $monto = $this->getMontoPrestamo();
        $cuota = $this->getCantCuotas();
        $inters = $this->getTazaInteres();
        
        $intersCuota = ($monto - (($monto / $cuota) * $numCuota -1)) * $inters / 0.01;

        return $intersCuota;
        
    }

    /**
     * Setea la variable instancia fecha otorgamiento, con la fecha actual ( por la función de PHP getdate()) 
     * y genera cada una de objetos cuotas dependiendo el valor de cantidad de cuotas, junto con el importe todal de la cuota
     *
     */

     public function OtorgarPrestamo()
     {
        $fecha = getdate();
        $this->setFechaOtorgamiento($fecha);

        $cuotas = $this->getCantCuotas();
        $monto = $this->getMontoPrestamo();
        $arregloCuotas = $this->getColeccionCuotas();

        $montoCuota = $monto / $cuotas;
        $numeroCuota = 1;
        
        for ($i=0; $i <= $cuotas; $i++) { 
           $interesCuota = $this->calcularInteresPrestamo($numeroCuota);

           $arregloCuotas[$i] = new Cuota($numeroCuota,$montoCuota,$interesCuota);
           $numeroCuota++;

        }

        $this->setColeccionCuotas($arregloCuotas);  
     }

     /**
      * Método que retorna la referencia a la siguiente cuota que debe ser abonada de un préstamo,
      * si el préstamo tiene todas sus cuotas canceladas retorna null.
      * @return voil
      */

     public function darSiguienteCuotaPagar()
     {
        $arregloCuota = $this->getColeccionCuotas();
        $i = 0;
        $x = true;
        /* $cuotaPagar = ""; */
       while ($x) {
            $a = $arregloCuota[$i];           
            if (!$a->getEstado()){

               $cuotaPagar = $a;
                $x = false;
            }else{
                $cuotaPagar = null;
            }

            $i++;
       }

       return $cuotaPagar;
     }

     private function Cuotas()
     {
        foreach ($this->getColeccionCuotas() as $key => $value) {
            
            return "\n▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ \n".$value."\n▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ ▬ \n";
        }
     }

     public function __toString()
     {
         return ("Identificacion: ". $this->getIdentificacion()."\n".
                 "Codigo del electrodomestico: ". $this->getCodElectrodomestico()."\n".
                 "Fecha de Otorgamiento: ". $this->getFechaOtorgamiento()."\n". 
                 "Monto: ". $this->getMontoPrestamo()."\n".
                 "Cantidad de Cuotas: ". $this->getCantCuotas(). "\n". 
                 "Taza de Interes: ". $this->getTazaInteres(). "\n". 
                 "Cuotas: ". $this->Cuotas(). "\n".
                 "Titular: ". $this->getObjPersona(). "\n");
     }






 }
?>