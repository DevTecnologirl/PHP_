<?php
    if(!file_exists("arquivo1.txt")) {
        die("Arquivo não encontrado");
    } 
    else {
        $file=fopen("arquivo1.txt","r");
    }
?>

