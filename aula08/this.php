<?php
    class Suporte{
       public $pontosDeCura;      
       function comparaPontosDeCura($pontosDeCura){
           if($this->pontosDeCura>$pontosDeCura){
               return "maior";
           }
           else{
               if($this->pontosDeCura<$pontosDeCura){
                   return "menor";
               }
               else{
                   return "igual";
               }
           }
       }
    }
 ?>


 
  