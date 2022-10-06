<?php
    //echo date("l j \h\o\l\a Y");

    echo date ("d \/m\/ Y");
    echo "</br>";
    echo date ("h \: i a");
    echo "</br>";
    echo date ("G \: i");
    echo "</br>";
    $dia =  date ("l");
    switch($dia){
        case "Monday":
        echo "<p>lunes</p>";
            break;
        case "Tuesday":
        echo "<p>Martes</p>";
             break;
        case "Wensday":
        echo "<p> Miercoles</p>";
            break;
        case "Thursday":
        echo "Hoy es Jueves" . date (" j ") . "de" . date (" M ") . " de " . date ("Y");
       
            break;
        case "Friday":
        echo "<p>viernes</p>";
            break;
        case "saturday":
        echo "<p>Sabado</p>";
            break;
        case "sunday":
        echo "<p>Domingo</p>";
            break;

    }
    
     /*
        Usar la estructura switch para mostrar la 
        fecha actual en español. Por ejemplo: 

        "Hoy es jueves 6 de octubre de 2022"
    */
    
    $d = date("l");

    switch($d) {
        case "Monday": 
            $dia = "Lunes";
            break;
        case "Tuesday": 
            $dia = "Martes";
            break;
        case "Thursday":
            $dia = "Jueves";
            break;
    }

    $ndia = date("j");

    $m = date("F");

    switch($m) {
        case "January":
            $mes = "Enero";
            break;
        case "February":
            $mes = "Febrero";
            break;
        case "October":
            $mes = "Octubre";
            break;
    }

    $anho = date("Y");

    echo "Hoy es $dia $ndia de $mes de $anho";
    
?>