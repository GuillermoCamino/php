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
<div class="container">
        
        <?php require '../../util/base_de_datos.php' ?>
        <?php require '../header.php' ?>

        <h1>Ver prenda</h1>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $prenda_id = $_GET["prenda_id"];
        echo "<p>$prenda_id</p>";

        $sql = "SELECT * FROM clientes_prendas WHERE prenda_id = '$prenda_id'";

        $resultado = $conexion -> query($sql);

        if ($resultado -> num_rows > 0) {
            while ($fila = $resultado -> fetch_assoc()) {
                $nombre = $fila["producto"];
                $precio = $fila["precio_unitario"];
                $imagen = $fila["imagen"];
                
            }
        }
    }
    ?>


    <div class="row">
        <div class="col-6">
            <p>nombre: <?php echo $producto?></p>
            <p>precio: <?php echo $precio_unitario?></p>
            <a class="btn btn-primary" href="index.php">Comprar</a>
            <br><br>
            <form action="editar_prenda.php" method="get">
                <input type="hidden" name="prenda_id" value="<?php echo $prenda_id ?>" >
                <input type="hidden" name="producto" value="<?php echo $producto ?>">
                <input type="hidden" name="precio_unitario" value="<?php echo $precio_unitario ?>">
                <button type="submit" class="btn btn-secondary">Volver</button>
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