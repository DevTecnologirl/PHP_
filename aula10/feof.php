<?php
    $arquivo = fopen ("listaDeFilmes.txt", "r");
    while (!feof($arquivo)) { //enquanto n�o � o fim do arquivo
        echo fgets ($arquivo). "<br>";
    }
    fclose($arquivo);
?>


