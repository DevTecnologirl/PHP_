<?php
    $numero = $_POST[idade];
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("� um n�mero inteiro");
    } 
    else {
        echo("N�o � um n�mero v�lido");
    }
?>

