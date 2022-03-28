<?php

include('Teatro.php');

    $teatro = [
        "NombTeatro"=>"Colon",
        "direcTeatro"=>"calle Rivadabia",
        "nombFuncion"=> "Dracula",
        "precioFuncion" => 5000
            ];


$objTeatro = new Teatro($teatro);
//$objTeatro->CambiarFuncion("Hercules");
$objTeatro->CambiarPrecio(1500);
//$objTeatro->CambiarDireccion("Calle Laynes");

echo $objTeatro;
