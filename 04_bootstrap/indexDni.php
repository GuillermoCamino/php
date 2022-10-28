<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Usuario</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $temp_nombre = depurar($_POST["nombre"]);
            $temp_apellidos= depurar($_POST["apellidos"]);
            $temp_DNI=depurar($_POST["DNI"]);
            $temp_email=depurar($_POST["email"]);
            $temp_fecha=depurar($_POST["fecha"]);

            $pattern ="/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";
            $patternDNI ="/^[0-9]{8}[A-zA-Z]+$/";
            $patternfecha="/^[0-3][0-9]\/[0-1][0-9]\/(19|20)[0-9]{2}$/";

            if (empty($temp_nombre)) {
                $err_nombre = "El nombre es obligatorio";
            }else{
                if(strlen($temp_nombre)>40){
                    $err_titulo="no puede tener tantos caracteres";
                }else{
                    if(preg_match($pattern,$temp_nombre)){
                        echo "<p>$temp_nombre sigue el patron</p>";

                        $nombre=$temp_nombre;
                    }else{
                        echo "<p>$temp_nombre no sigue el patron</p>";
                    }
                }
                
            }   
            if (empty($temp_apellidos)){
                $err_apellidos="el apellido es obligatiorio";
            }else{
                if(strlen($temp_apellidos)>40){
                    $err_titulo="no puede tener tantos caracteres";
                }else{
                    if(preg_match($pattern,$temp_apellidos)){
                        echo "<p>$temp_apellidos sigue el patron</p>";

                        $apellidos=$temp_apellidos;
                    }else{
                        echo "<p>$temp_apellidos no sigue el patron</p>";
                    }
                }    
            }

            if (empty($temp_DNI)){
                $err_DNI="el dni es obligatorio";
            }else{
                if(strlen($temp_DNI)>=10 && strlen($temp_DNI)<=8){
                    $err_DNI="El DNI no tiene sufiecientes caracteres o sobran";
                }else{
                    if(preg_match($patternDNI,$temp_DNI)){
                        echo "<p>$temp_DNI sigue el patron</p>";

                        $DNI=$temp_DNI;
                    }else{
                        echo "<p>$temp_DNI no sigue el patron</p>";
                    }
                }
            }
            if (empty($temp_email)){
                $err_email="el email es obligatiorio";
            }else if(filter_var($temp_email,FILTER_VALIDATE_EMAIL)==true){
                echo "<p>$temp_email correcto</p>";
            }else {
                echo "<p>$temp_email no es correcto</p>";
            }

            if (empty($temp_fecha)){
                $err_fecha="la fecha es obligatiorio";
            }else{
                if(preg_match($patternfecha,$temp_fecha)){
                    echo "<p>$temp_fecha sigue el patron</p>";

                    $fecha=$temp_fecha;
                }else{
                    echo "<p>$temp_fecha no sigue el patron</p>";
                }
            }
        }
        function depurar($dato) {
            $dato = trim($dato);
            $dato = stripslashes($dato);
            $dato = htmlspecialchars($dato);
            return $dato;
        }
    ?>
    <form action="" method="post">
        <div class="col-md-4">
            <label class="form-label">Nombre</label>
            <input type="text"  class="form-control" name="nombre">
            <span class="error">
                    * <?php if(isset($err_nombre)) echo $err_nombre ?>
            </span>
            
        </div>
        <div class="col-md-4">
            <label class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos">
            <span class="error">
                    * <?php if(isset($err_apellidos)) echo $err_apellidos ?>
            </span>
        </div>
        <label>DNI</label>
        <input type="text" name="DNI">
        <span class="error">
                * <?php if(isset($err_DNI)) echo $err_DNI ?>
            </span>
        <br><br>
        <label>email</label>
        <input type="text" name="email">
        <span class="error">
                * <?php if(isset($err_email)) echo $err_email ?>
            </span>
        <br><br>
        <label>fecha</label>
        <input type="text" name="fecha">
        <span class="error">
                * <?php if(isset($err_fecha)) echo $err_fecha?>
            </span>
        <br><br>
        <input type="submit" value="Enviar">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>