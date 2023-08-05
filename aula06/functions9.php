<?php
    function soma10($variavel) {
        if(is_numeric($variavel))
            echo $variavel+10;
        else 
            echo "nao e um numero";
    }
    soma10("casa"); 
    echo "<br>";
    soma10(5.3); 
    echo "<br>";
    soma10("8.8");
?>

