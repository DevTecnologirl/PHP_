<?php
    $arquivo = fopen ("listaDeFilmes.txt", "r");
    while (!feof($arquivo)) { //enquanto não é o fim do arquivo
        echo fgets ($arquivo). "<br>";
    }
    fclose($arquivo);
?>


