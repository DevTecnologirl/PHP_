<?php
    $cookie_nome = "visitante";
    $cookie_valor = "Maria";
    setcookie($cookie_nome, $cookie_valor, time() + (86400 * 30), "/");
    
    $cookie_valor = "João";
    setcookie($cookie_nome, $cookie_valor, time() + (86400 * 60), "/");
?>
<html>
    <body> 
     	<?php
            if(!isset($_COOKIE[$cookie_nome])) {
                echo "Cookie " . $cookie_nome . " não foi criado <br>";
            } 
            else {
                echo "Cookie " . $cookie_nome . " foi criado! <br>";
                echo "seu valor: " . $_COOKIE[$cookie_nome];
            }
        ?>
    </body>
</html>


