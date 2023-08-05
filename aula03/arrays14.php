<?php
    $livros = array(
        0=>array(
            "nome"=>"O diário 1", 
            "generos"=>array("aventura","ficção"), 
            "preço"=>"R$1000,00"     
        ),
        1=>array(
            "nome"=>"O senhor dos códigos", 
            "generos"=>array("romance","drama", "ação"), 
            "preço"=>"R$20,00")
        );
        echo $livros[0]["generos"][0];
        echo "<br>";
        echo $livros[1]["generos"][2];
?>


