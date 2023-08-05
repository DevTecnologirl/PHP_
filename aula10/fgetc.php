<?php
    $arquivo = fopen("listaDeFilmes.txt", "r");
    echo fgetc($arquivo);
    fclose ($arquivo);
?>


