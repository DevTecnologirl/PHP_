<?php 
    $data = getdate();   
    if($data["weekday"]=="Friday"){
        echo "Hoje e sexta!";
    }
    else{
        echo "Hoje nao e sexta :(";
    }
?>


