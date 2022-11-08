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
    <?php require '../header.php' ?>
    <?php require '../../util/base_de_datos.php'; ?>
        <h1>Listado de prendas</h1>
        <div class="row">
            <div class="col-9">
                <a class="btn btn-primary" href="insertar_prenda.php">Nueva Prenda</a>
                <table class=" table table-striped table-hover">
                    <thead class="table table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Talla</th>
                            <th>Precio</th>
                            <th>Categoria</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php // borrar prenda
                            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                $id=$_POST["id"];
                                $sql = "DELETE FROM prendas WHERE id = '$id'";
                                if($conexion -> query($sql)){
                                    ?> 
                                    <div class="alert alert-info alert-dismissible fade show" role="alert"><?php  echo "<p>Registro borrado</p>"; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                                    <?php
                                }else{
                                    echo "<p>No se ha podido borrar</p>";
                                }
                            }
                        ?>
                        <?php //seleccionar prendas
                            $sql="SELECT * FROM prendas";
                            $resultado=$conexion -> query($sql);

                            if($resultado -> num_rows > 0){
                                while ($fila = $resultado -> fetch_assoc()){
                                    $nombre=$fila["nombre"];
                                    $talla=$fila["talla"];
                                    $precio=$fila["precio"];
                                    $categoria=$fila["categoria"];
                                    ?>
                                        <tr>
                                            <td><?php echo $nombre?></td>
                                            <td><?php echo $talla?></td>
                                            <td><?php echo $precio?></td>
                                            <td><?php echo $categoria?></td>
                                            <td>
                                                <form action="mostrar_prenda.php" method="get">
                                                    <button class="btn btn-primary" type="submit">Ver</button>
                                                    <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                                                </form>
                                            </td>
                                            <td>
                                                <form action="" method="post">
                                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                                    <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <img width="300" height="300" src="../../resources/images/ropa.jpg">
            </div>
        </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>