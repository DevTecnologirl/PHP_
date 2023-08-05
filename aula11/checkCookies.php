<?php
    setcookie("testeCookie", "teste", time() + 100, '/');
?>
<html>
    <body>
        <?php
            if(count($_COOKIE) > 0) {
                echo "Cookies - ativados.";
            } 
            else {
                echo "Cookies - desativados.";
            }
        ?>
    </body>
</html>


