<?php

    $trono = array("Baratheon", "Stark", "Lannister","Targaryen");
    
    foreach ($trono as $nome):
        echo "Salve: $nome!";
        echo "<br>";
    endforeach;
    
    $lista = array(
        "comida" => "Arroz",
        "higiene" => "Escova de dentes",
        "limpeza" => "Detergente");
    
    foreach($lista as $categoria => $item){
        echo "$categoria : $item <br>";
    }
    
?>
    
    
   
    
    
        