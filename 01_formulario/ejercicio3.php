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
        <form action="ejercicio3_respuesta.php" method="get">
            <label>nombre</label><br>           
            <input type="text" name="nombre"><br><br>
            <label>edad</label><br>
            <input type="text" name="edad"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div> 
    <p> <a href="index.html">Volver a la pagina principal </p>
</body>
</html>