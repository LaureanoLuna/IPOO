<?php

class Categoria{

    private $idCategoria;
    private $descripcion;

    public function __construct($id, $descripcion)
    {
        $this->idCategoria = $id;
        $this->descripcion = $descripcion;
    }

    /**
     * Get the value of idCategoria
     */ 
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     *
     * @return  self
     */ 
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

    }

    public function Categoria()
    {
        $descCategoria = $this->getDescripcion();
        switch ($descCategoria) {
            case 'Menores':
               $categoria = 0.11;
                break;
            case 'Juveniles':                
                $categoria = 0.17;
                break;
            case 'Mayores':                
                $categoria = 0.23;
                break;            
           
        }

        return $categoria;
    }

    public function __toString()
    {
        $this->Categoria();
        $str = " ". $this->getDescripcion();
        return $str;
    }
}