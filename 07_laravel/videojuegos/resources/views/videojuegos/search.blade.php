<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
         
    <title>Buscador</title>
</head>
<body>
    <div class="container">
    @include('header')

    <h1>busqueda de videojuegos</h1>
    <a href="{{route('videojuegos.create') }}"class="btn btn-success">Crear videojuego</a>
    <form>
        <div class="row">
            <div class="col-2">
            <label class="form-label">Buscar por titulo:</label>
        </div>
        <div class="col-4">
        <input class="form-control" type="text" name="titulo">
        </div>
        <div class="col-2">
            <button class="btn btn-secondary" type="submit">Buscar</button>
        </div>
    </div>

    </form>
    <table class = "table">
        <thead>
    <tr>
        <th>Titulo</th>
        <th>precio</th>
        <th>pegi</th>
        <th>descripcion</th>
        <th></th>
        <th></th>

    </tr>
    </thead>
    
    @foreach($videojuegos as $videojuego)
    <tr>
        <td>{{$videojuego->titulo}}</td>
        <td>{{$videojuego->precio}}</td>
        <td>{{$videojuego->pegi}}</td>
        <td>{{$videojuego->descripcion}}</td>
        <td>
            <form method="get" action="{{route('videojuegos.show',['videojuego' => $videojuego -> id ])}}">
                <button class="btn btn-primary" type="submit">Ver</button>
            </form>
        </td>
        <td>
            <form method="post"action="{{route('videojuegos.destroy',['videojuego'=>$videojuego->id])}}">
             @csrf
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit">borrar</button>
        </form>
        </td>
    </tr>
    @endforeach
   
    <?php

    ?>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>
