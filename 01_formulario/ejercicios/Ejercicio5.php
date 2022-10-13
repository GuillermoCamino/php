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
    <h1>Ejercicio 5</h1>

    <p>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo.  </p>

    <div>
        <form action="ejercicio5_respuesta.php" method="get">
            <label>base</label><br>           
            <input type="text" name="numero1"><br><br>
            <label>exponente</label><br>
            <input type="text" name="numero2"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div> 
    <?php

require 'footer.php';
?>
</body>
</html>