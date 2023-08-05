<?php
    class Suporte{
       public $pontosDeCura;
             
       function cura(Tank $t){
           $t->vida += $pontosDeCura;
       }
    }
    
    
    class Tank{
        public $vida;
    }
    
    $soraka = new Suporte();
    $soraka->pontosDeCura = 10;
    echo $soraka->pontosDeCura;
    $soraka->aumentaPontosDeCura(50);
?>


 
  