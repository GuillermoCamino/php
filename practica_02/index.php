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
    <?php

 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $temp_DNI=depurar($_POST["DNI"]);
        $temp_nombre = depurar($_POST["nombre"]);
        $temp_primerApellido= depurar($_POST["primerApellido"]);
        $temp_segundoApellido= depurar($_POST["segundoApellido"]);
        $temp_edad= depurar($_POST["edad"]);
        $temp_email= depurar($_POST["email"]);

        $patternDNI ="/^[0-9]{8}[A-zA-Z]+$/";
        $pattern ="/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";


        if (empty($temp_DNI)){
            $err_DNI="el dni es obligatorio";
        }else{
            if(strlen($temp_DNI)>=10 && strlen($temp_DNI)<=8){
                $err_DNI="El DNI no tiene sufiecientes caracteres o sobran";
            }else{
                if(preg_match($patternDNI,$temp_DNI)){
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
                            $resultado=(int)$temp_DNI%23;
                            $letra = match($resultado){
                                0 => "T",
                                1 => "R",
                                2 => "W",
                                3 => "A",
                                4 => "G",
                                5 => "M",
                                6 => "Y",
                                7 => "F",
                                8 => "P",
                                9 => "D",
                                10 => "X",
                                11 => "B",
                                12 => "N",
                                13 => "J",
                                14 => "Z",
                                15 => "S",
                                16 => "Q",
                                17 => "V",
                                18 => "H",
                                19 => "L",
                                20 => "C",
                                21 => "K",
                                22 => "E",
                            };          
                            if(strlen($temp_DNI)>=10 || strlen($temp_DNI)<=8){
        
                                $err_DNI ="faltan o sobran caracteres";
        
                            }else{            
                                $letra_introducida =substr($temp_DNI,-1);       

                                if($letra_introducida!==$letra){
                                    $err_DNI ="La letra $letra_introducida es incorrecta en el DNI $temp_DNI ";
                                    $err_DNI ="La letra $letra es la correcta";
                                }else if($letra_introducida==$letra){
                                
                                    echo "<p>La letra $letra_introducida es correcta en el DNI $temp_DNI </p>";
                                }
                                
                                }
                            }
                        
                    $DNI=$temp_DNI;
                }else{
                    $err_dni = "no sigue el patron";
                }
            }
        }
        if (empty($temp_nombre)) {
            $err_nombre = "El nombre es obligatorio";
        }else{
            if(strlen($temp_nombre)>40){
                $err_nombre="no puede tener tantos caracteres";
            }else{
                if(preg_match($pattern,$temp_nombre)){
                    echo "<p>". mb_convert_case($temp_nombre,MB_CASE_TITLE,"UTF-8") ." sigue el patron</p>";

                    $nombre=$temp_nombre;
                }else{
                    $err_nombre ="no sigue el patron";
                }
            }
        } 
        if (empty($temp_primerApellido)){
            $err_primerApellido="el apellido es obligatiorio";
        }else{
            if(strlen($temp_primerApellido)>40){
                $err_primerApellido="no puede tener tantos caracteres";
            }else{
                if(preg_match($pattern,$temp_primerApellido)){
                    echo "<p>". mb_convert_case($temp_primerApellido,MB_CASE_TITLE,"UTF-8") ." sigue el patron</p>";

                    $primerApellido=$temp_primerApellido;
                }else{
                    $err_primerApellido ="no sigue el patron";
                }
            }
        } 

        if (empty($temp_segundoApellido)){
            $err_segundoApellido="el apellido es obligatiorio";
        }else{
            if(strlen($temp_segundoApellido)>40){
                $err_segundoApellido="no puede tener tantos caracteres";
            }else{
                if(preg_match($pattern,$temp_segundoApellido)){
                    echo "<p>". mb_convert_case($temp_segundoApellido,MB_CASE_TITLE,"UTF-8") ." sigue el patron</p>";

                    $segundoApellido=$temp_segundoApellido;
                }else{
                    $err_segundoApellido= "no sigue el patron";
                }
            }
        } 
        if(empty($temp_edad)){
            $err_edad="la edad es obligatoria";
        }else{
            if($temp_edad<0||$temp_edad>120){
                $err_edad="la edad no es valida";
            }else if($temp_edad<=17&&$temp_edad>0){
                $err_edad="eres menor de edad";
            }else if($temp_edad>=18&&$temp_edad<120){
                echo "<p>$temp_edad es correcta eres mayor de edad</p>";

                $edad=$temp_edad;
            }
        }
        if (empty($temp_email)){
            $err_email="el email es obligatiorio";
        }else if(filter_var($temp_email,FILTER_VALIDATE_EMAIL)==true){
            if(str_contains($temp_email,'cabron')){
                $err_email="el email no puede contener palabras malsonantes";
            }else if (str_contains($temp_email,'tonto')){
                $err_email="el email no puede contener palabras malsonantes";

            }else if(str_contains($temp_email,'puta')){
                $err_email="el email no puede contener palabras malsonantes";
            }else{
                echo "<p>$temp_email correcto</p>";

                $email=$temp_email;
            }
        }else{
            $err_email= "no es correcto";
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
        <label>Nombre</label>
        <input type="text" name="nombre">
        <span class="error">
            * <?php if(isset($err_nombre)) echo $err_nombre ?>
        </span>
        <br><br>
        <label>primer apellido</label>
        <input type="text" name="primerApellido">
        <span class="error">
                * <?php if(isset($err_primerApellido)) echo $err_primerApellido ?>
            </span>
        <br><br>
        <label>segundo apellido</label>
        <input type="text" name="segundoApellido">
        <span class="error">
                * <?php if(isset($err_segundoApellido)) echo $err_segundoApellido ?>
            </span>
        <br><br>
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
        <label>edad</label>
        <input type="text" name="edad">
        <span class="error">
            * <?php if(isset($err_edad)) echo $err_edad?>
        </span>
        <br><br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>