<?php
    $x = 10;
    $y = 11;
    function soma($a,$b){  /**as variáveis $a e $b vão receber 
                            o valor das variáveis $x e $y, 
                            mas não são as mesmas variáveis */
        
        $x = $a+$b; /**essa variável apenas existe na 
                      função soma(), não é a mesma variável $x 
                      que está fora da função.*/
        return $x;
    }
    echo soma($x, $y);
    echo "<br>";
    echo $x; /** não altera o valor por causa da função, 
                continua 10. */
?>


