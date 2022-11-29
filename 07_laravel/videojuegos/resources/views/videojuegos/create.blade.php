<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
         
    <title>nuevo Videojuego</title>
</head>
<body>
    <h1>Nuevo Videojuego</h1>
    @include('header')
 
    <?php
    /*if($_SERVER["REQUEST_METHOD"]=="POST"){
        $temp_titulo= depurar($_POST["titulo"]);
        $temp_precio =depurar($_POST["precio"]);
        $temp_pegi=depurar($_POST["pegi"]);
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

        if (empty($temp_pegi)) {
            $err_pegi="El campo es obligario";
        }else {
                $pegi=$temp_pegi;
            
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

        if(isset($titulo)&& isset($precio)&& isset($pegi)&& isset($descripcion)){
            echo "<p>$titulo</p>";
            echo "<p>$precio</p>";
            echo "<p>$pegi</p>";
            echo "<p>$descripcion</p>";

        }
    }

    function depurar($dato)
    {
        $dato=trim($dato);
        $dato=stripslashes($dato);
        $dato=htmlspecialchars($dato);
        return $dato;
    }*/
    ?>
    <form method="post" action="{{route('videojuegos.store')}}">
        @csrf 
        <div class="container">
        <div>
            <label class="form-label">Titulo</label>
         <input class="form-control" type="text" name="titulo">
            <span class="error">
                 <?php if(isset($err_titulo)) echo $err_titulo ?>
            </span>
        </div>
        <div>
            <label class="form-label">Precio</label>
         <input class="form-control" type="text" name="precio">
            <span class="error">
                 <?php if(isset($err_precio)) echo $err_precio ?>
            </span>
        </div>
        <div>
        <div>
            <label class="form-label">Pegi</label>
             <select class="form-select" name="pegi">
                <option selected value> -- select an option -- </option>
                <option value="3">3</option>
                <option value="7">7</option>
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="18">18</option>
            </select>
            <span class="error">
                 <?php if(isset($err_pegi)) echo $err_pegi ?>
            </span>
        </div>
        <div>
            <label class="form-label">Descripcion</label>
         <input class="form-control" type="textarea" name="descripcion">
            <span class="error">
                 <?php if(isset($err_descr)) echo $err_descr ?>
            </span>
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{route('videojuegos.index') }}"class="btn btn-success">volver</a>
            </form>
        </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>