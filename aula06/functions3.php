<?php
    function porcentagem($valor1 = 50, $valor2 = 50) {
        echo ($valor1/$valor2)*100;
        echo "<br>";
    }
    porcentagem(25,100);
    porcentagem(); /** aqui ser� utilizado o valor padr�o 
                    para os dois argumentos */
    porcentagem(70,90);
    porcentagem(90,50);
?>






