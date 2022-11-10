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
        require '../header.php' ;
        require '../../util/base_de_datos.php' ;

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $id=$_GET["id"];
        $nombre=$_GET["nombre"];
        $precio=$_GET["precio"];
        $talla=$_GET["talla"];
        $categoria=$_GET["categoria"];
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $talla=$_POST["talla"];
        $categoria=$_POST["categoria"];

        $sql="UPDATE prendas SET nombre='$nombre', talla='$talla',precio='$precio',categoria='$categoria' WHERE id='$id'";
        if ($conexion -> query($sql)=="TRUE"){
            ?> 
            <div class="alert alert-info alert-dismissible fade show" role="alert"><?php  
            echo "<p>Prenda modificada</p>";?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
            <?php
        }else{
            ?>
            <div class="alert alert-danger" role="alert"><?php echo "<p>Error al modificar</p>"; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
            <?php
        } 
    }
    ?>
    <div class="container">

        <h1>Editar prenda</h1>

        <div class="container">
            <div class="col-6">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="<?php echo $nombre ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">categoria</label>
                        <select class="form-select" name="categoria" value="<?php echo $categoria ?>">
                            <option value="<?php echo $categoria ?>" select  hidden> <?php echo ucfirst(strtolower($categoria)) ?> </option>
                            <option value="camisetas">Camisetas</option>
                            <option value="pantalones">Pantalones</option>
                            <option value="accesorios">Accesorios</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Precio</label>
                        <input class="form-control" type="text" name="precio" value="<?php echo $precio ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Talla</label>
                        <select class="form-select" name="talla">
                            <option value="<?php echo $talla ?>" select hidden> <?php echo $talla?></option>
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button class="btn btn-primary" type="submit">Editar</button>
                    <a class="btn-btn-secundary" href="index.php">Volver</a>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>