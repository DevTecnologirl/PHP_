<?php

    //a fun��o lan�a uma exception se o n�mero for maior que 1
    function verificaNumero($numero) {
        if($numero>1) {
            throw new Exception("Valor deve ser menor que 1");
        }
        return true;
    }
    
    //provoca uma exception
    verificaNumero(2);
    
?>

