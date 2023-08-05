<?php
    $vetor = array(1,2,3,4,5);
    
    echo "Numeros pares: ";
    
    for($i=0;$i<count($vetor);$i++){
        if($vetor[$i]%2>0)
            continue;
        echo $vetor[$i]." ";
    }
?>

