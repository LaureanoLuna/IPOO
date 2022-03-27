<?php

/**10.d. Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite
recordar la contraseña ingresada y las ultimas 4 contraseñas utilizadas. Implementar un método que
permita validar una contraseña con la almacenada y un método para cambiar la contraseña actual por otra
nueva, el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es
decir no se encuentra dentro de las cuatro almacenadas). Implementar el método recordar que dado el
usuario, muestra la frase que permite recordar su contraseña.
 */

 class Login{

    private $nombreUsuario;
    private $contraseña;
    private $fraseRecuerdaContraseña;
    private $clavesAnteriores;

    public function __construct($nombre, $password, $frasePasw)
    {
        $this->nombreUsuario = $nombre;
        $this->contraseña = $password;
        $this->fraseRecuerdaContraseña = $frasePasw;
        $this->clavesAnteriores = [ "Usuario" => " ",
                                    "ClaveActual" => " ",
                                    "FraseRecordatoria" => " ",
                                    "ClavesViejas" => ["pancha","pepa","1234","yo123"]
                                    ];        
    }
    
    
    /**
     * Get the value of nombreUsuario
     */ 
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set the value of nombreUsuario
     *
     * @return  self
     */ 
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get the value of contraseña
     */ 
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * Set the value of contraseña
     *
     * @return  self
     */ 
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    /**
     * Get the value of fraseRecuerdaContraseña
     */ 
    public function getFraseRecuerdaContraseña()
    {
        return $this->fraseRecuerdaContraseña;
    }

    /**
     * Set the value of fraseRecuerdaContraseña
     *
     * @return  self
     */ 
    public function setFraseRecuerdaContraseña($fraseRecuerdaContraseña)
    {
        $this->fraseRecuerdaContraseña = $fraseRecuerdaContraseña;

        return $this;
    }

    /**
     * Get the value of clavesAnteriores
     */ 
    public function getClavesAnteriores()
    {
        return $this->clavesAnteriores;
    }

    /**
     * Set the value of clavesAnteriores
     *
     * @return  self
     */ 
    public function setClavesAnteriores($clavesAnteriores)
    {
        $this->clavesAnteriores = $clavesAnteriores;

        return $this;
    }

       private function ValidacionPassword($nuevaClave)
    {
        $validacion = true;
        $clavesViejas = ($this->getClavesAnteriores())["ClavesViejas"];
        foreach ($clavesViejas as $key => $value) {
            if ($value == $nuevaClave){
                $validacion = false;
            }

        }return $validacion;
    }

    public function CambiarPassword($nuevoPassword)
    {
        if ($this->ValidacionPassword($nuevoPassword)){
            $this->setContraseña($nuevoPassword);
            echo "\nla contrseña fue cambiada con exito \n";
        }else{
            echo $nuevoPassword. "\nYa fue utilizado con anterioridad \n";
        }

    }

    public function Recordar($nombUsuario)
    {
        
       if ($nombUsuario == $this->getNombreUsuario()){

        echo "\n".($this->getFraseRecuerdaContraseña())."\n";           
           
       }else{
           echo " \nNo tiene frase para recordar clave \n";
       }

    }

    public function __toString()
    {
        return "Usuario: " .$this->getNombreUsuario(). " \nPassword: ". $this->getContraseña().  "\nLa frase es: ". $this->getFraseRecuerdaContraseña();
    }

    public function __destruct()
    {
        echo " \nel usuario fue borrado \n";
    }
 }
?>