<?php
    $variavel = '';
    if (isset($variavel)) {
        echo "Essa vari�vel existe.";
    }  
    $a = "teste";
    var_dump(isset($a));      // TRUE
    
    unset ($a);
    var_dump(isset($a));     // FALSE
    
    $foo = NULL;
    var_dump(isset($foo));   // FALSE
?>


