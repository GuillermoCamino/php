<h1>Respuesta Formulario</h1>

<?php

$base = $_GET["numero1"];
$expo = $_GET["numero2"];
$resultado=1;

   for($i=1;$i<=$expo;$i++){
    $resultado=$resultado*$base;

    }
    echo "la  potencia es [$base]^[$expo]=[$resultado]";


?>