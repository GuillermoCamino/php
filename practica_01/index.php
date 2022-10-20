<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Practica 1 Guillermo</title>
    <h1>Practica 1 Guillermo</h1>
</head>
<body>
<div>
        <h2 id="ej1">Ejercicio 1</h2>
        <p>Ejercicio que muestra los numeros primos a partir del numero q diga el usuario</p>
        <form action="index.php#ej1" method="get">
            <label>a</label><br>
            <input type="text" name="a"><br><br>
            <label>b</label><br>
            <input type="text" name="b"><br><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if ($_GET["f"] == "ej1") {
                require 'funciones/primo.php';
                $a = $_GET['a'];
                $b = $_GET['b'];
                $contador = $b + 1;
                do {
                    if (esPrimo($contador)) {
                        echo "$contador <br>";
                        $a = $a - 1;
                    }
                    $contador++;
                } while ($a != 0);
            }
        }
        ?>
    </div>
    <div>
        <h2 id="ej2">Ejercicio 2</h2>
        <p>Crea un formulario que compruebe si un DNI es válido</p>
        <form action="index.php#ej2" method="post">
            <label>numero</label><br>
            <input type="text" name="numero1"><br><br>
            <label>DNI</label><br>
            <input type="text" name="DNI"><br><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej2") {
                    $numeros = $_POST["numeros"];
                    $DNI = $_POST["DNI"];

                    echo "<p>$numeros</p>";
                    echo "<p>$DNI</p>";
                    if(strlen($DNI<9 && $DNI>9)){
                        echo "faltan o sobran caracteres";
                    }else{
                        echo "ta bien";
                    }
                    $cadena=$DNI;
                    echo "[".substr( $cadena, 9 )."]<br/>";
                    $letras = match($letras) {
                        "A" => "a",
                        "Tuesday" => "Martes",
                        "Wednesday" => "Miércoles",
                        "Thursday" => "Jueves",
                    };
                }
            }
        ?>
    </div>
    <div>
<h2 id="ej3">Ej3</h2>
<form action="#ej3" method="post">
<input type="hidden" name="f" value="ej3">
<input type="submit" value="Mostrar tabla">

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["f"] == "ej3") {

    $multiplicando;
    $multiplicador;

echo "<table border=5;>";
echo "<tr>";
for ($tabla=1; $tabla<=10  ; $tabla++) { 
    echo "<td>Tabla del $tabla </td>";
}
echo "</tr>";
echo "<tr>";
for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
    for ($multiplicando=1; $multiplicando <=10 ; $multiplicando++) { 
        echo "<td>$multiplicando X $multiplicador =";
        echo ($multiplicando *$multiplicador);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
    }
}
?>
</form>



</body>
</html>