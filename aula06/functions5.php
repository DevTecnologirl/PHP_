<?php
    function contagemRegressiva($valor){
        if($valor!=0){
            echo $valor;
            contagemRegressiva($valor-1);
        }
    }
    contagemRegressiva(10);
?>

