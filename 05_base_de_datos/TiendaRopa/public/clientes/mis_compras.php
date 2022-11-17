<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
    require '../../util/control_de_acceso.php';
    require '../header.php';
    require '../../util/base_de_datos.php';

   ?>
   
    <div class="container">
    <?php
     $sql="SELECT * FROM clientes"
     ?>
 
         <div class="row">
             <?php
             
             echo "<p> " . $_SESSION["usuario"] . "</p>";
             
             ?>
         </div>
 
         <a href="desconectarse.php">Cerrar Sesion</a>
        <h1>Ver prenda</h1>
        <?php

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["id"];
        echo "<p>$id</p>";

        $sql = "SELECT * FROM prendas WHERE id = '$id'";

        $resultado = $conexion -> query($sql);

        if ($resultado -> num_rows > 0) {
            while ($fila = $resultado -> fetch_assoc()) {
                $nombre = $fila["nombre"];
                $talla = $fila["talla"];
                $precio = $fila["precio"];
                $categoria = $fila["categoria"];
                $imagen = $fila["imagen"];
                
            }
        }
    }
    ?>


    <div class="row">
        <div class="col-6">
            <p>nombre: <?php echo $nombre?></p>
            <p>talla: <?php echo $talla?></p>
            <p>precio: <?php echo $precio?></p>
            <p>categoria: <?php echo $categoria?></p>
            <a class="btn btn-secondary" href="index.php">Volver</a>
            <br><br>
            <form action="editar_prenda.php" method="get">
                <input type="hidden" name="id" value="<?php echo $id ?>" >
                <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
                <input type="hidden" name="talla" value="<?php echo $talla ?>">
                <input type="hidden" name="precio" value="<?php echo $precio ?>">
                <input type="hidden" name="categoria" value="<?php echo $categoria ?>">
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
        <div class="col-4">
        <img width="200" height="300" src="../..<?php echo $imagen ?>">
        </div>
    </div>
</div>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>