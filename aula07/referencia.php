<?php
    function incrementa(&$x){
        $x++;
    }
    $x=5;
    incrementa($x); // agora $x é alterado para 6
    echo $x;
?>

