<?php
    //a fun��o lan�a uma exception se o n�mero for maior que 1
    function verificaNumero($numero) {
        if($numero>1) {
            throw new Exception("Valor deve ser menor que 1");
        }
        return true;
    }
    //tratamento de exce��o
    try {
        verificaNumero(2);
        //Se a exception for lan�ada, este texto n�o ser� exibido
        echo 'Se voc� esta lendo isso, o n�mero � menor ou igual a 1';
    }
    /**
     * catch - captura da exception
     * $e - instancia��o da exception 
     */
    catch(Exception $e) {
        echo 'Messagem: ' .$e->getMessage();
    }
?>



