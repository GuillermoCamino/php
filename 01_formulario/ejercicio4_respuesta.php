<h1>Respiesta Formulario</h1>

<?php
$frase =$_GET["frase"];
$numero = (int)$_GET["numero"];
switch($numero){
    case 1:
        echo "<h1>$frase/h1>";
        break;
    case 2:
        echo "<h2>$frase</h2>";
        break;
    case 3:
        echo "<h3>$frase</h3>";
        break;
    case 4:
        echo "<h4>$frase/h4>";
        break;
    case 5:
        echo "<h5>$frase</h5>";
         break;
    case 6:
        echo "<h6>$frase</h6>";
        break;
    default:
        echo "introduce un numero valido";
}

?>