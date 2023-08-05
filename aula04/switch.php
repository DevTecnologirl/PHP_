<?php 
$opcao = "subtracao";
$x = 15; $y = 10;
    switch($opcao){
        case "adicao":
            echo $x+$y;
            break;
        case "subtracao":
            echo $x-$y;
            break;
        case "divisao":
            echo $x/$y;
            break;
        case "multiplicacao":
            echo $x*$y;
            break;
        default:
            echo "escolha uma opcao valida.";
    }
?>





