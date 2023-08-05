<?php
    $value = 'viu as ultimas noticias';
    setcookie("CookieTeste", $value);
    
    $value = 'viu as noticias da ultima hora';
    setcookie("CookieTeste2", $value, time()+3600); // expira em 1 hora
    
    $value = 'Exemplo completo';
    setcookie("CookieTeste3", $value, time()+7200, "/exemplos/", "ctrlplay.com.br", true);
?>


