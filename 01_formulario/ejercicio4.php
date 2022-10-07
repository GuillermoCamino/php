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

    <p>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
    en un encabezado de dicho número </p>

    <div>
        <form action="ejercicio4_respuesta.php" method="get">
            <label>frase</label><br>           
            <input type="text" name="frase"><br><br>
            <label>numero</label><br>
            <input type="text" name="numero"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div> 
</body>
</html>