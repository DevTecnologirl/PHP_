<?php
    class Campeao{
        public $nome;
        function dizNome(){
            echo "Meu nome e ". $this->nome;
        }
    }
    class Suporte extends Campeao{
        public $pontosDeCura;   
        function cura(Tank $t){
            $t->vida += $pontosDeCura;
        }
    }
    class Tank extends Campeao{
        public $defesa;
    }
?>


