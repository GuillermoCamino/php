<?php

function factorial(int $numero) {
    $resultado=1;

    if($numero<0){
        echo "pon un numero valido";
    }else{
        for($i=1;$i<=$numero;$i++){
            $resultado=$resultado*$i;
        
        }
    }
    return $resultado;
    }
    

?>