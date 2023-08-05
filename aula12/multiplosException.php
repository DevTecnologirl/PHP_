<?php
    class exceptionDeEmail extends Exception {
        public function errorMessage() {
            //mensagem exibida quando acontecer um erro
            $errorMsg = 'Erro na linha '.$this->getLine().' no arquivo '.$this->getFile().
            ': <b>'.$this->getMessage().'</b> <h3> endereço de e-mail inválido </h3>';
            return $errorMsg;
        }
    }
    $email = "exemplo@errado...&%com";
    try {
        //verifica se o e-mail inicia com a palavra "exemplo"
        if(strpos($email, "exemplo") !== FALSE) {
            throw new Exception("''$email'' <h3> é um e-mail de exemplo </h3>");
        }
        //verifica se o e-mail é válido
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //lança um exception personalizada se o e-mail é inválido
            throw new exceptionDeEmail($email);
        }
    }
    catch (exceptionDeEmail $e) {
        echo $e->errorMessage();
    }
    catch(Exception $e) {
        echo $e->getMessage();
    }
?>


