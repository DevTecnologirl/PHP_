<?php
    //Inicializando uma sess�o
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            //Definindo variaveis apenas um session
            $_SESSION["cor"] = "azul";
            $_SESSION["fonte"] = "arial";
            $_SESSION["alinhamentoDoTexto"] = "justificado";
            echo "Variaveis da session foram definidas.";
        ?>
    </body>
</html>


