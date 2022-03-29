<?php
/* 16. Cree una clase Libro que tenga los atributos ISBN, titulo, año de edición, editorial, nombre y apellido
del autor. Defina en la clase los siguientes métodos
a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos de la
clase.
b) Los método de acceso de cada uno de los atributos de la clase.
c) Método toString() que retorne la información de los atributos de la clase.
d) perteneceEditorial($peditorial): indica si el libro pertenece a una editorial dada. Recibe como parámetro
una editorial y devuelve un valor verdadero/falso.
e) aniosdesdeEdicion(): método que retorna los años que han pasado desde que el libro fue editado.
f) Cree un script TestLibro que:
1) defina el método iguales($plibro,$parreglo): dada una colección de libros, indica si el libro pasado por
parámetro ya se encuentra en dicha colección.
2) defina el método librodeEditoriales($arreglolibros, $peditorial): método que retorna un arreglo asociativo
con todos los libros publicados por la editorial dada.
3) cree al menos tres objetos libros e invoque a cada uno de los métodos implementados en la clase Libro.  */

class Libro
{

    private $codISBN;
    private $tituloLibro;
    private $anioEdicion;
    private $nomEditorial;
    private $nombAutor;

    public function __construct($numISBN, $titleBook, $anioEditado, $editorial, $autor)
    {
        $this->codISBN = $numISBN;
        $this->tituloLibro = $titleBook;
        $this->anioEdicion = $anioEditado;
        $this->nomEditorial = $editorial;
        $this->nombAutor = $autor;
    }

    /**
     * Get the value of codISBN
     */ 
    public function getCodISBN()
    {
        return $this->codISBN;
    }

    /**
     * Set the value of codISBN
     *
     * @return  self
     */ 
    public function setCodISBN($codISBN)
    {
        $this->codISBN = $codISBN;

        return $this;
    }

    /**
     * Get the value of tituloLibro
     */ 
    public function getTituloLibro()
    {
        return $this->tituloLibro;
    }

    /**
     * Set the value of tituloLibro
     *
     * @return  self
     */ 
    public function setTituloLibro($tituloLibro)
    {
        $this->tituloLibro = $tituloLibro;

        return $this;
    }

    /**
     * Get the value of anioEdicion
     */ 
    public function getAnioEdicion()
    {
        return $this->anioEdicion;
    }

    /**
     * Set the value of anioEdicion
     *
     * @return  self
     */ 
    public function setAnioEdicion($anioEdicion)
    {
        $this->anioEdicion = $anioEdicion;

        return $this;
    }

    /**
     * Get the value of nomEditorial
     */ 
    public function getNomEditorial()
    {
        return $this->nomEditorial;
    }

    /**
     * Set the value of nomEditorial
     *
     * @return  self
     */ 
    public function setNomEditorial($nomEditorial)
    {
        $this->nomEditorial = $nomEditorial;

        return $this;
    }

    /**
     * Get the value of nombAutor
     */ 
    public function getNombAutor()
    {
        return $this->nombAutor;
    }

    /**
     * Set the value of nombAutor
     *
     * @return  self
     */ 
    public function setNombAutor($nombAutor)
    {
        $this->nombAutor = $nombAutor;

        return $this;
    }

    public function perteneceEditorial($peditorial)
    {
       return ($this->getNomEditorial() == $peditorial);   
    }

    public function  aniosdesdeEdicion()
    {
        return  ((getdate()["year"]) - $this->getAnioEdicion());
    }


    public function __toString()
    {
        return "El libro es ".$this->getTituloLibro()."\n"."Autor ".$this->getNombAutor()."\nDe la editorial ".$this->getNomEditorial()."\nCodigo de ISBN ".$this->getCodISBN()."\nPublicado en el ".$this->getAnioEdicion();
    }
}
