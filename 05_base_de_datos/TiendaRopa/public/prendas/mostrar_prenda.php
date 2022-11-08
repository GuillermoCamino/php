<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ver prenda</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $id=$_GET["id"];
            echo "<p>$id</p>";
            $nombre=$_GET["nombre"];
            echo "<p>$nombre</p>";
            $talla=$_GET["talla"];
            echo "<p>$talla</p>";
            $precio=$_GET["precio"];
            echo "<p>$precio</p>";
            $categoria=$_GET["categoria"];
            echo "<p>$categoria</p>";
        }   
    ?>
</body>
</html>