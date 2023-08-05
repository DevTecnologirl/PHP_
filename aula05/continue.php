<?php
    $numeros = array(10, 41, 57, 88);
    $numeroDoUsuario = 113;
    
    for($i=1;$i<$numeroDoUsuario;$i++){
        if($numeroDoUsuario%$i==0){
            if($i!=1 && $i!=$numeroDoUsuario){
                echo "Ele nao e primo!";
                break;
            }
        }
        echo "Ele e primo!";
    }
    
    
  