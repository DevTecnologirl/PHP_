<?php
    $email = "h.boss@ctrlplay.com.br";
    
    // remove todos os caracteres ilegais
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    // verifica o e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("O e-mail � v�lido");
    } 
    else {
        echo("O e-mail n�o � v�lido");
    }
?>

