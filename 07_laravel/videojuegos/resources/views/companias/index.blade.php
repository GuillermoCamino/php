<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
         
    <title>Compañias</title>
</head>
<body>
    <div class="container">
    <h1>index de compañias</h1>
    <p>{{$mensaje}}</p>
    <a href="{{route('companias.create') }}"class="btn btn-success">Crear compañia</a>
    <a href="{{route('videojuegos.index') }}"class="btn btn-success">Ver juegos</a>
    <table class = "table">
        <thead>
    <tr>
        <th>Nombre</th>
        <th>sede</th>
        <th>fecha_fundacion</th>
    </tr>
    </thead>
    
    @foreach($companias as $compania)
    <tr>
        <td>{{$compania->nombre}}</td>
        <td>{{$compania->sede}}</td>
        <td>{{$compania->fecha_fundacion}}</td>
    </tr>
    @endforeach

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>
