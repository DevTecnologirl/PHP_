<?php
    class exceptionDeEmail extends Exception {
        public function errorMessage() {
            //mensagem exibida quando acontecer um erro
            $errorMsg = 'Erro na linha '.$this->getLine().' no arquivo '.$this->getFile().
            ': <b>'.$this->getMessage().'</b> endere�o de e-mail inv�lido';
            return $errorMsg;
        }
    }
    $email = "email@errado...&%com";
    try {
        //verifica se o e-mail � v�lido
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //lan�a um exceptiop personalizada se o e-mail � inv�lido
            throw new exceptionDeEmail($email);
        }
    } 
    catch (exceptionDeEmail $e) {
        //exibe a mensagem personalizada
        echo $e->errorMessage();
    }
?>




