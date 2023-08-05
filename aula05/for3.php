<?php
$jogoDaVelha [0][0] = 'O';
$jogoDaVelha [0][1] = 'X';
$jogoDaVelha [0][2] = 'O';

$jogoDaVelha [1][0] = 'X';
$jogoDaVelha [1][1] = 'O';
$jogoDaVelha [1][2] = 'X';

$jogoDaVelha [2][0] = 'X';
$jogoDaVelha [2][1] = 'O';
$jogoDaVelha [2][2] = 'O';

for($linha=0;$linha<3;$linha++){
    for($coluna=0;$coluna<3;$coluna++){
      echo "A jogada na posicao $i,$j foi:";
      echo $jogoDaVelha[$i][$j]."<br>"; 
    }
}


