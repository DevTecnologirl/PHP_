<?php 

    function voto($idade, $alfabetizado) {
		if(!$alfabetizado || $idade>70 || ($idade<18 && $idade>=16)){
			return false;
		}
        else if($idade>=18 && $idade<70){
			return true;
		}
        return false;
    }

    if(voto(29,true)){
	   echo "Deve votar";
    }
?>



