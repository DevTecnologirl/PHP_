<?php
    $numero = $_POST[idade];
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("É um número inteiro");
    } 
    else {
        echo("Não é um número válido");
    }
?>

