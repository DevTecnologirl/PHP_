<?php
    $a = 1;
    $b = 2;
    function Soma(){
        global $a, $b;
        $b = $a + $b;
    }
    Soma();
    echo $b;
?>



