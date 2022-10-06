<h1>Estructura IF</h1>

<?php
    $numero=3;
    
    if($numero > 0){
        echo "<p>El numero es positivo</p>";
    } else if ($numero<0){
        echo "<p>El numero es negativo</p>";
    }else{
        echo "<p>El numero es 0</p>";
    }

    if($numero %2==0){
        echo "<p>El numero es par</p>";
    }else{
        echo "<p>El numero es imprar</p>";
    }

    $alumno="Guillermo";
    $nota=10;

    if($nota < 5 && $nota >=0){
        echo "<p>$alumno esta suspenso</p>";
    } else if ($nota >=5 && $nota <7){
        echo "<p>$alumno esta aprobado</p>";
    } else if ($nota >=7 && $nota <9){
        echo "<p> $alumno tiene un notable</p>";
    } else if ($nota >=9 ||$nota >=10){
        echo "<p> $alumno tiene un sobresaliente</p>";
    }else{
        echo "<p> esa no es una nota valida</p>";
    }

    $usuario = "admin";
    $contrasena = "123";
    
    if($usuario == "admin" && $contrasena == "123"){
        echo "<p> sesion iniciada</p>";
    } else if ($usuario != "admin" && $contrasena == "123"){
        echo "<p>contraseña correcta pero usuario incorrecto </p>";
    } else if ($usuario == "admin" && $contrasena !="123"){
        echo "<p>contraseña incorrecta</p>";
    }else if ($usuario != "admin" && $contrasena != "123"){
        echo "<p>usuario y contraseña incorrectos</p>";
    }

?>