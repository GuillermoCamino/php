
<h1>Respiesta Formulario</h1>

<?php
$a =$_GET["numero1"];
$b = (int)$_GET["numero2"];

echo ucfirst (strtolower("$nombre"));
if($edad < 18 && $edad >=0){
    echo "<p>$edad Eres menor de edad</p>";
    }elseif($edad >=18 && $edad <65){
    echo "<p>$edad Eres mayor de edad</p>";
    }elseif($edad>=65 && $edad <=130){
    echo "<p>$edad Eres jubilado</p>";
    }else{
    echo "<p>introduce una edad valida </p>"; 
    }

?>