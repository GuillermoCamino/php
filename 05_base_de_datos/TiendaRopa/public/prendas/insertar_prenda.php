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
    require '../../util/base_de_datos.php';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre=$_POST["nombre"];
        $talla=$_POST["talla"];
        $precio=$_POST["precio"];
        if(isset($_POST["categoria"])){
            $categoria=$_POST["categoria"];
        }else{
            $categoria="";
        }
    
        if(!empty($nombre) && !empty($talla) && !empty($precio)){
            if(!empty($categoria)){
            $sql= "INSERT INTO prendas (nombre,talla,precio,categoria) VALUES ('$nombre','$talla','$precio','$categoria')";
            } else {
                $sql= "INSERT INTO prendas (nombre,talla,precio) VALUES ('$nombre','$talla','$precio')";
            }
            if($conexion -> query($sql)=="TRUE"){
                echo "<p>Prenda Inseratda</p>";
            }else{
                echo "<p>Error al insertar</p>";
            }
        }
    }
    ?>
    <div class="container">
    <?php require '../header.php' 

    ?>
        <h1>Nueva prenda</h1>

        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="form-group mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group mb-3">
                    <label class="form-label">categoria</label>
                        <select class="form-select" name="categoria">
                        <option value="" select disabled hidden> -- select an option -- </option>
                        <option value="camisetas">camisetas</option>
                        <option value="pantalones">pantalones</option>
                        <option value="accesorios">accesorios</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Talla</label>
                        <select class="form-select" name="talla">
                        <option value="" select disabled hidden> -- select an option -- </option>
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Precio</label>
                        <input class="form-control" type="text" name="precio">
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
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