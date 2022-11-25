<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
         
    <title>videojuegos</title>
</head>
<body>
    <div class="container">
    <h1>index de videojuegos</h1>
    <p>{{$mensaje}}</p>
    <a href="{{route('videojuegos.create') }}"class="btn btn-success">Crear videojuego</a>
    <a href="{{route('companias.index') }}"class="btn btn-success">ver compañias</a>
    <table class = "table">
        <thead>
    <tr>
        <th>Titulo</th>
        <th>precio</th>
        <th>pegi</th>
        <th>descripcion</th>
    </tr>
    </thead>
    
    @foreach($videojuegos as $videojuego)
    <tr>
        <td>{{$videojuego->titulo}}</td>
        <td>{{$videojuego->precio}}</td>
        <td>{{$videojuego->pegi}}</td>
        <td>{{$videojuego->descripcion}}</td>
    </tr>
    @endforeach
   
    <?php
    /*foreach($videojuegos as $videojuegos){
        list($titulo,$precio,$pegi, $descripcion)= $videojuegos;
        ?>
        <tr>
        <td><?php echo $titulo ?></td>
        <td><?php echo $precio ?></td>
        <td><?php echo $pegi ?></td>
        <td><?php echo $descripcion ?></td>
        </tr>
        <?php
        echo "<br>";
     }
    */
    ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>