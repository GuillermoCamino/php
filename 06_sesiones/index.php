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
    require 'base_de_datos.php';
    $sql="SELECT rol FROM usuarios"
    ?>
    <div class="container">
        <div class="row">
            <?php
            session_start();
            if(!isset($_SESSION["usuario"])){
                header("location: iniciar_sesion.php");

            }
            else if(isset($_SESSION["$rol='administrador'"])){
                echo "<p> Has iniciado sesion " . $_SESSION["usuario"] . "</p>";
                echo "<p>Esto solo lo puede ver los admins</p>";

            }else{
                echo "<p> Has iniciado sesion " . $_SESSION["usuario"] . "</p>";
                echo "<p>Esto lo puede ver cualquier usuario</p>";
            }
            ?>
        </div>

        <a href="desconectarse.php">Cerrar Sesion</a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>