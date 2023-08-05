<?php
    $cardapio = 
              "01. AMERICANA - MOLHO DE TOMATE, MUSSARELA, BACON, CALABRESA, OVOS E CEBOLA <br>
               02. APRESUNTADA - MOLHO DE TOMATE, PRESUNTO E MUSSARELA <br>
               03. CROCANTE - MOLHO DE TOMATE, MUSSARELA, CATUPIRY, BATATA PALHA <br>
               04. MILHO - MOLHO DE TOMATE, MUSSARELA E MILHO <br>
               05. MUSSARELA - MOLHO DE TOMATE, MUSSARELA <br>
               06. TRADICIONAL - MOLHO DE TOMATE, PRESUNTO, TOMATES E MUSSARELA <br>";
    
    echo str_replace("MUSSARELA", "REQUEIJAO", $cardapio, $quantidadeDeTrocas); /** será impresso um novo cardápio 
                                                                                    com 'requeijão' no lugar de 'mussarela' */
    
    echo "Quantidade de trocas feitas: ".$quantidadeDeTrocas; //será informado que foram feitas 7 trocas;

    echo str_replace("MOLHO DE TOMATE,", "", $cardapio);
    echo "<br>";
    
    $frase  = "voce deve comer pizza, refrigerante, e sorvete todos os dias.";
    $prejudicial   = array("pizza", "refrigerante", "sorvete");
    $saudavel = array("frutas", "verduras", "legumes");
    
    $novafrase = str_replace($prejudicial,$saudavel, $frase);
    
    echo $novafrase;
   

?>