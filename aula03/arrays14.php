<?php
    $livros = array(
        0=>array(
            "nome"=>"O di�rio 1", 
            "generos"=>array("aventura","fic��o"), 
            "pre�o"=>"R$1000,00"     
        ),
        1=>array(
            "nome"=>"O senhor dos c�digos", 
            "generos"=>array("romance","drama", "a��o"), 
            "pre�o"=>"R$20,00")
        );
        echo $livros[0]["generos"][0];
        echo "<br>";
        echo $livros[1]["generos"][2];
?>


