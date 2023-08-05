<?php 
    $idade = 14;
    $acompanhadoComResponsavel = true;  
    
    if($idade>16){
        echo "Pode assistir o filme. 
                Voce esta na faixa etaria correta" ;   
    }
    else if($acompanhadoComResponsavel){
        echo "Pode assistir o filme. 
                Voce esta acompanhando com um responsavel";
    }
    else{
        echo "Nao pode assistir o filme!";
    }
?>




