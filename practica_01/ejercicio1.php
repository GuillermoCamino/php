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
    <h1>Ejercicio 3</h1>

    <p>Crear un formulario que reciba el nombre y la edad de una persona y
    muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
    a su edad.</p>

    <div>
        <form action="ejercicio1_respuesta.php" method="get">
            <label>a</label><br>           
            <input type="text" name="numero1"><br><br>
            <label>b</label><br>
            <input type="text" name="numero2"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div> 
    <?php

require 'footer.php';
?>
</body>
</html>