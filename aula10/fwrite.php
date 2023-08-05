<?php   
    $arquivo = fopen("listaDeFilmes.txt", "a");
    $txt = "Homem-Mosquito - Indo para casa". PHP_EOL;
    fwrite ($arquivo, $txt);
    $txt = "Homem de Lata 3". PHP_EOL;
    fwrite($arquivo, $txt);
    fclose($arquivo);
?>


