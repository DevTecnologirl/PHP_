<?php
    class Campeao{
        public $nome;
        function dizNome(){
            echo "Meu nome e ". $this->nome;
        }
    }
    
    class Tank extends Campeao{
        public $defesa;
    }
    
    $rammus = new Tank();
    $rammus->nome = "Rammus";
    $rammus->dizNome();
?>

