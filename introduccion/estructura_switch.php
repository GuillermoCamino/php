<h1> Estructura Switch</h1>

<?php
    $numero = rand(1,3);
   // echo "<p> $numero </p>";
   $alumno="Guillermo";
    $nota=3;
   switch($nota){
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo "<p>$alumno esta suspenso</p>";
            break;
        case 5:
        case 6:
            echo "<p>$alumno esta aprobado</p>";
            break;
        case 7:
        case 8:
            echo "<p>$alumno tiene notable</p>";
            break;
        case 9:
        case 10:
            echo "<p>$alumno tiene un sobresaliente</p>";
            break;
   }
?>