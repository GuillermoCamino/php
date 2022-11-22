<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nuevo Videojuego</title>
</head>
<body>
    <h1>Nuevo Videojuego</h1>
    <form action="" method="post">
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
         <input class="form-control" type="text" name="descripcion">
            <span class="error">
                 <?php if(isset($err_descr)) echo $err_descr ?>
            </span>
            <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
        </div>
</body>
</html>