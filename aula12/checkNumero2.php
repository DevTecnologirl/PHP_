<?php
    $int = 0;    
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("É um número inteiro");
    } 
    else {
        echo("Não é um número válido");
    }
?>

