<?php
/* 2. Implementar una clase Disquera con los atributos: hora_desde y hora_hasta (que indican el horario de
atención de la tienda), estado (abierta o cerrada), dirección y dueño. El atributo dueño debe referenciar a un
objeto de la clase Persona implementada en el punto 1. Defina en la clase los siguientes métodos:
a) Método constructor _ _construct () que recibe como parámetros los valores iniciales para los atributos
de la clase.
b) Los métodos de acceso de cada uno de los atributos de la clase.
c) dentroHorarioAtencion($hora,$minutos): que dada una hora y minutos retorna true si la tienda debe
encontrarse abierta en ese horario y false en caso contrario.
d) abrirDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra dentro del
horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura.
e) cerrarDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra fuera del
horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre.
f) Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
g) Crear un script Test_Disquera que cree un objeto Disquera e invoque a cada uno de los métodos
implementados. */

class Disquera{

    private $hora_desde;
    private $hora_hasta;
    private $estado;
    private $direccion;
    private $duenio;

    public function __construct($direcComercio, $dataDuenio)
    {
        $this->direccion = $direcComercio;
        $this->duenio = $dataDuenio->getNomPersona();
        $this->hora_desde = ["hs"=>7,"min"=>0];
        $this->hora_hasta = ["hs"=>16,"min"=>59];
        $this->estado = "Cerrado";
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getDuenio()
    {
        return $this->duenio;
    }

    public function setDuenio($duenio)
    {
        $this->duenio = $duenio;
    }

    public function getHora_Desde()
    {
        return $this->hora_desde;
    }

    public function setHora_Desde($hora_desde)
    {
        $this->hora_desde = $hora_desde;
    }
    public function getHora_Hasta()
    {
        return $this->hora_hasta;
    }

    public function setHora_Hasta($hora_hasta)
    {
        $this->hora_desde = $hora_hasta;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /* Dada una hora y minutos retorna true si la tienda debe
    encontrarse abierta en ese horario y false en caso contrario. */

    public function dentroHorarioAtencion($hora,$minutos)
    {
        $x = false;
        if (($this->getHora_Desde()["hs"]) <= $hora && ($this->getHora_Hasta()["hs"]) >= $hora)
        {
           if ($minutos >= ($this->getHora_Desde()["min"]) && $minutos <= ($this->getHora_Desde()["min"]))
           {
               $x = true;
           }
        } 

        return $x;
            
    }

    /*d) Dada una hora y minutos corrobora que se encuentra dentro del
        horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura. */

    public function abrirDisquera($hora,$minutos)
    {
        if (($this->getHora_Desde()["hs"]) <= $hora && $minutos >= ($this->getHora_Desde()["min"]))
        {
            $this->setEstado("Abierto");
            echo $this ;
        }
    }

        /*e)Que dada una hora y minutos corrobora que se encuentra fuera del
        horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre. */

    public function cerrarDisquera($hora,$minutos)
    {
        if (!($this->dentroHorarioAtencion($hora,$minutos)))
        {
            $this->setEstado("Cerrado");
            echo $this ;
        }
    }

    public function __toString()
    {
        return "El comercio de ". ($this-> getDuenio()["apellido"]).", ". ($this->getDuenio()["nombre"])."\n".
        "en la direccion ". $this->getDireccion()."\n". "Abre a las ". ($this->getHora_Desde()["hs"]).":".($this->getHora_Desde()["min"]). "hs, hasta las ".($this->getHora_Hasta()["hs"]). ":". ($this->getHora_Hasta()["min"]). "hs \nSe encuentra ". $this->getEstado(). " en este momento. \n";
    }




}
