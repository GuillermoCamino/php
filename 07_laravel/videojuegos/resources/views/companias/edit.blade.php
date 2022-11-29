<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Editar videojuego</h1>

        <div class="row">
            <div class="col-9">
        <form method="POST" action="{{ route('companias.update', ['compania' => $compania ->id]) }}">
        {{method_field('PUT')}}
      @csrf 
        <div>
            <label class="form-label">nombre</label>
         <input class="form-control" type="text" name="nombre" value="{{ $compania->nombre }}">
        </div>
        <div>
            <label class="form-label">sede</label>
         <input class="form-control" type="text" name="sede" value="{{ $compania->sede }}">
        </div>
            <label class="form-label">fecha_fundacion</label>
         <input class="form-control" type="date" name="fecha_fundacion" value="{{ $compania->fecha_fundacion }}">
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{route('companias.index') }}"class="btn btn-success">volver</a>
            </form>
        </div>
        </div>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>

