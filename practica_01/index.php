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
        <form action="index.php#ej1" method="POST">
            <label>cantidad</label><br>
            <input type="text" name="a"><br><br>
            <label>numero que empieza</label><br>
            <input type="text" name="b"><br><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej1") {
                require 'funciones/primo.php';
                $a = $_POST['a'];
                $b = $_POST['b'];
                $contador = $b;
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
            <label>DNI</label><br>
            <input type="text" name="DNI"><br><br>
            <input type="hidden" name="f" value="ej2">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej2") {
                    
                    $DNI = $_POST["DNI"];

                    echo " $DNI ";

                    $resultado=(int)$DNI%23;
                    $letra = match($resultado){
                        0 => "T",
                        1 => "R",
                        2 => "W",
                        3 => "A",
                        4 => "G",
                        5 => "M",
                        6 => "Y",
                        7 => "F",
                        8 => "P",
                        9 => "D",
                        10 => "X",
                        11 => "B",
                        12 => "N",
                        13 => "J",
                        14 => "Z",
                        15 => "S",
                        16 => "Q",
                        17 => "V",
                        18 => "H",
                        19 => "L",
                        20 => "C",
                        21 => "K",
                        22 => "E",
                    };          
                    if(strlen($DNI)>=10 || strlen($DNI)<=8){

                        echo "faltan o sobran caracteres";

                    }else{            
                        $letra_introducida =substr($DNI,-1);            
                        if($letra_introducida!==$letra){
                            echo "<p>La letra $letra_introducida es incorrecta en el DNI $DNI </p>";
                            echo "<p>La letra $letra es la correcta</p>";
                        }else if($letra_introducida==$letra){
                        
                            echo "<p>La letra $letra_introducida es correcta en el DNI $DNI </p>";
                        }
                        
                        }
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