<?php
    /** Configura a data de expira��o para uma hora atr�s
    *   n�o importa o valor do cookie, uma vez que ele ser� deletado.
    */
    setcookie("visitante", "", time() - 3600);
    setcookie("CookieTeste2", "", time() - 3600);
    setcookie("CookieTeste3", "", time() - 3600, "/exemplos/", "ctrlplay.com.br", true);
?>


