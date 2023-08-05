<?php
    class Suporte{
       public $pontosDeCura;
                   
       function aumentaPontosDeCura($pontos){
           $pontosDeCura += $pontos;
           return $pontosDeCura;
       }
       
    } 
    
    $soraka = new Suporte();
    $soraka->pontosDeCura = 10;
    echo $soraka->pontosDeCura;
    $soraka->aumentaPontosDeCura(50);
?>


 
  