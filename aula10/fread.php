<?php
    $arquivo = fopen("listaDeFilmes.txt", "r");
    $x = fread($arquivo, filesize("listaDeFilmes.txt"));
    echo $x;
?>

