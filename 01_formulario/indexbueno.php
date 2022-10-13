<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
    
</head>
<body>
<div>
        <h2 id="ej1">Ejercicio 1</h2>
        <p>Formulario que reciba un nombre y una edad y los muestre por pantalla</p>
        <form action="indexbueno.php#ej1" method="post">
            <label>Nombre</label><br>
            <input type="text" name="nombre"><br><br>
            <label>Edad</label><br>
            <input type="text" name="edad"><br><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej1") {
                    $nombre = $_POST["nombre"];
                    $edad = $_POST["edad"];

                    echo "<p>$nombre</p>";
                    echo "<p>$edad</p>";
                }
            }
        ?>
    </div>
    <div>
        <h2 id="ej2"> Ejercicio 2 </h2>
        <p>Crear un formulario que reciba un número. Generar una lista dinámicamente con tantos elementos como se haya indicado</p>
        <div>
        <form action="indexbueno.php#ej2" method="post">
            <label>Número</label><br>
            <input type="text" name="numero"><br><br>
            <input type="hidden" name="f" value="ej2">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej2") {
                    $numero = $_POST["numero"];

                    echo "<p>$numero</p>";
                }
            }
        ?>
    </div>
    </div>
    <div>
    <div>
    <h2 id="ej3"> Ejercicio 3 </h2>
        <p>Crear un formulario que reciba el nombre y la edad de una persona y
    muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
    a su edad</p>
    <div>
        <form action="indexbueno.php#ej3" method="post">
            <label>nombre</label><br>           
            <input type="text" name="nombre"><br><br>
            <label>edad</label><br>
            <input type="text" name="edad"><br><br>
            <input type="hidden" name="f" value="ej3">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej3") {
                    $nombre = $_POST["nombre"];
                    $edad = $_POST["edad"];
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
                }
            }
        ?>
    </div>
    </div>
    <div>
    <div>
    <h2 id="ej4"> Ejercicio 4 </h2>
        <p>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
    en un encabezado de dicho número</p>
    <div>
    <form action="indexbueno.php#ej4" method="post">
            <label>frase</label><br>           
            <input type="text" name="frase"><br><br>
            <label>numero</label><br>
            <input type="text" name="numero"><br><br>
            <input type="hidden" name="f" value="ej4">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej4") {
                    $frase = $_POST["frase"];
                    $numero = $_POST["numero"];

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
                    
                }
            }
        ?>
    </div>
    </div>

    <h2 id="ej5"> Ejercicio 5 </h2>
        <p>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo.</p>
    <div>
    <form action="indexbueno.php#ej5" method="post">
    <label>base</label><br>           
            <input type="text" name="numero1"><br><br>
            <label>exponente</label><br>
            <input type="text" name="numero2"><br><br>
            <input type="hidden" name="f" value="ej5">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej5") {
                    $base = $_POST["numero1"];
                    $expo = $_POST["numero2"];

                    $resultado=1;

                    for($i=1;$i<=$expo;$i++){
                     $resultado=$resultado*$base;
                 
                     }
                     echo "la  potencia es [$base]^[$expo]=[$resultado]";
                 
                }
            }
        ?>

<h2 id="ej6"> Ejercicio 6 </h2>
        <p>Formulario que reciba un número y devuelva su factorial.</p>
    <div>
    <form action="indexbueno.php#ej6" method="post">
           
    <label>numero</label><br>           
            <input type="text" name="numero1"><br><br>
            <input type="hidden" name="f" value="ej6">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej6") {
                    $numero = $_POST["numero1"];

                    
                    $resultado=1;


    if($numero<0){
        echo "pon un numero valido";
    }else{
        for($i=1;$i<=$numero;$i++){
            $resultado=$resultado*$i;
        
        }
        echo "[$resultado]";
    }
    
                }
            }
        ?>
    </div>
    </div>
</body>
</html>