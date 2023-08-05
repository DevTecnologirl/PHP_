<?php
    $arquivo = fopen ("listaDeFilmes.txt", "r");
    echo fgets($arquivo);
    fclose($arquivo);
?>

