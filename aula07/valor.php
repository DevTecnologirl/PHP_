<?php
    $x = 10;
    $y = 11;
    function soma($a,$b){  /**as vari�veis $a e $b v�o receber 
                            o valor das vari�veis $x e $y, 
                            mas n�o s�o as mesmas vari�veis */
        
        $x = $a+$b; /**essa vari�vel apenas existe na 
                      fun��o soma(), n�o � a mesma vari�vel $x 
                      que est� fora da fun��o.*/
        return $x;
    }
    echo soma($x, $y);
    echo "<br>";
    echo $x; /** n�o altera o valor por causa da fun��o, 
                continua 10. */
?>


