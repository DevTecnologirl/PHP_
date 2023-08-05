<?php
    $numeroDoUsuario = $_POST['numero'];
    $soma = 0;
    $quantidadeDeNumeros = 0;
    for($i=0; $i<100;$i++){
        $soma+=$i;
        $quantidadeDeNumeros++;
        if($soma>$numeroDoUsuario)
            break;
        
    }
    if($quantidadeDeNumeros==100){
        echo "Nao e possivel somar numeros de 0 a 100 e ultrapassar
                o valor digitado";
    }
    else{
        echo "Foi necessario somar $quantidadeDeNumeros 
         numeros para ultrapassar o valor digitado pelo usuario";
    }
?>



