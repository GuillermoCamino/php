<link rel="stylesheet" href="estilo.css">
<?php

$numero = $_GET["numero1"];
$resultado=1;


    if($numero<0){
        echo "pon un numero valido";
    }else{
        for($i=1;$i<=$numero;$i++){
            $resultado=$resultado*$i;
        
        }
        echo "[$resultado]";
    }
    

?>