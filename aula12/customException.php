<?php
    class exceptionDeEmail extends Exception {
        public function errorMessage() {
            //mensagem exibida quando acontecer um erro
            $errorMsg = 'Erro na linha '.$this->getLine().' no arquivo '.$this->getFile().
            ': <b>'.$this->getMessage().'</b> endereço de e-mail inválido';
            return $errorMsg;
        }
    }
    $email = "email@errado...&%com";
    try {
        //verifica se o e-mail é válido
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //lança um exceptiop personalizada se o e-mail é inválido
            throw new exceptionDeEmail($email);
        }
    } 
    catch (exceptionDeEmail $e) {
        //exibe a mensagem personalizada
        echo $e->errorMessage();
    }
?>




