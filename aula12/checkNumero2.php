<?php
    $int = 0;    
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("� um n�mero inteiro");
    } 
    else {
        echo("N�o � um n�mero v�lido");
    }
?>

