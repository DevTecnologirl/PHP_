<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
    
        <?php
            echo "Cor: " . $_SESSION["cor"] . ".<br>";
            echo "Fonte: " . $_SESSION["fonte"] . ".";
        ?>
    
    </body>
</html>


