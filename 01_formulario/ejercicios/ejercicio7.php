<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Ejercicio7</h1>

    <p>Crear un formulario que reciba el nombre de un videojuego, su consola, y si es edición especial.
Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:
40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirá
mediante un campo select.
Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con un checkbox.  </p>

    <div>
        <form action="ejercicio7.php" method="post">
        <label>juego</label><br>           
            <input type="text" name="juego"><br><br>
            <label>consolas</label><br>           
            <select name="consolas" id="consolas">
                <option value="ps4">ps4</option>
                <option value="switch">switch</option>
                <option value="ps5">ps5</option>
            </select>
            <input type="checkbox" id="especial" name="especial" value="si">
            <label for="especial"> marca si es especial</label><br>
            <input type="submit" value="Enviar">
        </form>
    </div> 

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = $_POST["juego"];
            $consola= $_POST["consolas"];
            $especial = "";
            
        if(isset($_POST["especial"])){
            $especial=$_POST["especial"];
        }



        $precio=0;

        if($consola=="ps4"){
            $precio=60;
        }else if($consola=="ps5"){
            $precio=70;
        }else if($consola=="switch"){
            $precio=40;
        }

        if($especial == "si"){
            $precio *=1.25;
        }
        echo "<h3> el videojuego $nombre para $consola vale $precio</h3>";
    }
    ?>
    <p> <a href="index.html">Volver a la pagina principal </p>
</body>
</html>