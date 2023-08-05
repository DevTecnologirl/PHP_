<?php
    //a função lança uma exception se o número for maior que 1
    function verificaNumero($numero) {
        if($numero>1) {
            throw new Exception("Valor deve ser menor que 1");
        }
        return true;
    }
    //tratamento de exceção
    try {
        verificaNumero(2);
        //Se a exception for lançada, este texto não será exibido
        echo 'Se você esta lendo isso, o número é menor ou igual a 1';
    }
    /**
     * catch - captura da exception
     * $e - instanciação da exception 
     */
    catch(Exception $e) {
        echo 'Messagem: ' .$e->getMessage();
    }
?>



