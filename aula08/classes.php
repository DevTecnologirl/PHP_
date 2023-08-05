<?php
    class Suporte{
       public $pontosDeCura;
       
       function exibePontosDeCura(){
           echo "Pontos de Cura :".$pontosDeCura;
       }
       
       function aumentaPontosDeCura($pontos){
           $pontosDeCura += $pontos;
           return $pontosDeCura;
       }
       
    } 
    
    $soraka = new Suporte();
    
    
?>


 
  