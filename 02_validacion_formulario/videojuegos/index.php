<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Document</title>
</head>

<body>
    <h2>NUevo videojuego</h2>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $temp_titulo= depurar($_POST["titulo"]);
        $temp_precio =depurar($_POST["precio"]);
        $temp_consola=depurar($_POST["consola"]);
        $temp_descripcion=depurar($_POST["descripcion"]);


        if (empty($temp_titulo)) {
            $err_titulo="El campo es obligario";
        }else {
            if(strlen($temp_titulo)>40){
                $err_titulo="Demasiado largo";
            }else {
                $titulo=$temp_titulo;
            }
        }

        if (empty($temp_consola)) {
            $err_consola="El campo es obligario";
        }else {
                $consola=$temp_consola;
            
        }

        if (empty($temp_precio)) {
            $err_precio="El campo es obligario";
        }else {
            $temp_precio=round($temp_precio,2);
            $temp_precio=filter_var($temp_precio,FILTER_VALIDATE_FLOAT);
            if(!$temp_precio){
                $err_precio="El precio debe ser un numero";
            }else {
                if($temp_precio<0){
                    $err_precio="El precio no puede ser negativo";
                }elseif ($temp_precio>=10000) {
                    $err_precio="El precio no puede ser igual o superior a 10000";
                }else {
                    $precio=$temp_precio;
                }
            }
        }
        if (empty($temp_descripcion)) {
            $err_descr = "la descripcion es obligatoria";
        }else{
            if(strlen($temp_descripcion)>255){
                $err_descr="no puede tener tantos caracteres";
            }else{
                $descripcion = $temp_descripcion;
            }
        }
        $file_name = $_FILES["imagen"]["name"];
        $file_temp_name = $_FILES["imagen"]["tmp_name"];
        $file_size = $_FILES["imagen"]["size"];
        $file_type = $_FILES["imagen"]["type"];
       
    
           
        if (empty($file_name)) {
            $err_imagen = "La imagen es obligatoria";
        } else {
            $file_size = $_FILES["imagen"]["size"];

            if ($file_size > 1000000) {
                $err_imagen = "La imagen no puede pesar más de 1 MB";
            } else {
                $extension = pathinfo($file_name, PATHINFO_EXTENSION);

                $extension_valida = match($extension) {
                    "jpg" => true,
                    "jpeg" => true,
                    "png" => true,
                    default => false
                };

                if (!$extension_valida) {
                    $err_imagen = "La imagen tiene que ser .png, .jpg o .jpeg";
                } else {
                    $new_file_name = "videojuego_" . $temp_titulo 
                        . "." . $extension;

                    $path = "./images/" . $new_file_name;

                    $file_temp_name = $_FILES["imagen"]["tmp_name"];

                    if (move_uploaded_file($file_temp_name, $path)) {
                        echo "<p>Fichero movido con éxito</p>";
                    } else {
                        echo "<p>Fracaso</p>";
                    }
                }
            }
        }
    



        if(isset($titulo)&& isset($precio)&& isset($consola)&& isset($descripcion)){
            echo "<p>$titulo</p>";
            echo "<p>$precio</p>";
            echo "<p>$consola</p>";
            echo "<p>$descripcion</p>";

        }
    }

    function depurar($dato)
    {
        $dato=trim($dato);
        $dato=stripslashes($dato);
        $dato=htmlspecialchars($dato);
        return $dato;
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <p> Titulo: <input type="text" name="titulo">
            <span class="error">
                * <?php if(isset($err_titulo)) echo $err_titulo ?>
            </span>
        </p>
        <p> Precio: <input type="text" name="precio">
            <span class="error">
                * <?php if(isset($err_precio)) echo $err_precio ?>
            </span>
        </p>

        <p> Consola: <select name="consola">
                <option selected value> -- select an option -- </option>
                <option value="ps4">ps4</option>
                <option value="xbox">xbox</option>
                <option value="pc">pc</option>
                <option value="Switch">Switch</option>
            </select>
            <span class="error">
                * <?php if(isset($err_consola)) echo $err_consola ?>
            </span>
        </p>

        <p> Descripción: <input type="text" name="descripcion">
            <span class="error">
                * <?php if(isset($err_descr)) echo $err_descr ?>
            </span>
        </p>
        <p>Imagen:<input type="file" name="imagen">
            <span class="error">
                * <?php if(isset($err_imagen)) echo $err_imagen ?>
            </span>
        </p>

        <p><input type="submit" name="Crear"></p>


    </form>

</body>

</html>