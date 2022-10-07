
<h1>Respiesta Formulario</h1>

<?php
$nombre =$_GET["nombre"];
$edad = (int)$_GET["edad"];

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