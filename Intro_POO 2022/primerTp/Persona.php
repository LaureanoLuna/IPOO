<?php
/* La clase Persona, debe contar con atributos de caracteristicas de persona, como color de pelo, estatura, color de ojos, nombre y apellido, nro de DNI.
los metodos deberian ser, caminar, pararse, saltar, hablar, comer, beber, dormi, entrenar, trabajar */
class Persona {

    private $nombre;
    private $estatura;
    private $nroDNI;
    private $colorPelo;
    private $peso;
    
    public function __construct($nombrePers,$estaturaPers,$nroDNIPers,$colorPeloPers,$pesoPers)
    {
        $this->nombre = $nombrePers;
        $this->estatura = $estaturaPers;
        $this->nroDNI = $nroDNIPers;
        $this->colorPelo = $colorPeloPers;
        $this->peso = $pesoPers;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getNumeroDNI(){
        return $this->nroDNI;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getColorDePelo(){
        return $this->colorPelo;
    }
    public function getEstatura(){
        return $this->estatura;
    }

    public function correr ($timeRecorrido){
        $this->peso = $this->peso - $timeRecorrido;
        return $this->peso;
    }

    public function comer($caloriasIngeridas)
    {
        return ($this->peso = $this->peso + $caloriasIngeridas);
    }

    public function __toString()
    {
        return ("Nombre y Apellido ".$this->nombre."\nSu numero de DNI es ".$this->nroDNI."\n Su estatura es de ".$this->estatura."\n tiene un peso de ".$this->peso."\n Color de Pelo es ".$this->colorPelo);
        
    }

    public function __destruct()
    {
        echo $this . "\n La persona a fallecido \n";
        
    }
     
};


$persona = new Persona("Laureano Luna", 1.73, 38232325, "Castaño Claro", 72);

$persona->comer(3);
$persona->correr(0.5);

$persona2 = new Persona("Antonella Giacone",1.73, 36841599,"Castaño",60);

