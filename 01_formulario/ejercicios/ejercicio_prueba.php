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
    <h1>Ejercicio prueba</h1>

    <p>Formulario que se queda el parametro que pongas </p>

    <div>
        <form action="ejercicio_prueba.php" method="post">
            <label>numero</label><br>           
            <input type="text" name="numero1"><br><br>
            <input type="hidden" name="f" value="f_numero">
            <input type="submit" value="Enviar">
        </form>
    </div> 


    <div>
        <form action="ejercicio_prueba.php" method="post">
            <label>nombre</label><br>           
            <input type="text" name="nombre"><br><br>
            <input type="hidden" name="f" value="f_nombre">
            <input type="submit" value="Enviar">
        </form>
    </div> 
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"]=="f_numero"){
                echo "<p>Estoy en f_numero</p>";
            }else if ($_POST["f"]=="f_nombre"){
                echo "<p>Estoy en f_nombre</p>";
            }
        }
    ?>

    <p> <a href="index.html">Volver a la pagina principal </p>
</body>
</html>