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
<h1>Ejercicio 8</h1>
<p>Ejercicio que deuvelve tabla de multiplicar</p>

<div>
        <form action="ejercicio8_respuesta.php" method="get">
            <label>Número</label><br>
            <input type="text" name="multiplicando"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

<?php 

require 'footer.php';
 ?>
 </body>
 <html>