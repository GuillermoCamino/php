
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     
    <title>editar Consola</title>
</head>
<body>

    <form method="POST" action="{{ route('consolas.update', ['consola' => $consola ->id]) }}">
        {{method_field('PUT')}}
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-9">
            <label class="form-label">nombre</label>
         <input class="form-control" type="text" name="nombre"  value="{{ $consola->nombre }}">
        </div>
        <div>
            <label class="form-label">Año salida</label>
         <input class="form-control" type="date" name="anioSalido" value="{{ $consola->anioSalido }}">
        
            <label class="form-label">generacion</label>
         <input class="form-control" type="text" name="generacion" value="{{ $consola->generacion }}">
    
            <label class="form-label">descripcion</label>
        <input class="form-control" type="text" name="descripcion" value="{{ $consola->descripcion }}">
            <button type="submit" class="btn btn-primary">Crear</button>
            <a href="{{route('consolas.index') }}"class="btn btn-success">volver</a>
            </form>
        
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
</html>

