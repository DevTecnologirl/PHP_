<?php
    /** Configura a data de expiração para uma hora atrás
    *   não importa o valor do cookie, uma vez que ele será deletado.
    */
    setcookie("visitante", "", time() - 3600);
    setcookie("CookieTeste2", "", time() - 3600);
    setcookie("CookieTeste3", "", time() - 3600, "/exemplos/", "ctrlplay.com.br", true);
?>


