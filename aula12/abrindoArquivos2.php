<?php
    if(!file_exists("arquivo1.txt")) {
        die("Arquivo n�o encontrado");
    } 
    else {
        $file=fopen("arquivo1.txt","r");
    }
?>

