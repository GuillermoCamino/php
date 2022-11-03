<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class = "table table-info" >
        <tr>
            <td>Producto</td>
            <td>Precio</td>
        </tr>
    <?php
    $productos=[
        ["Sandia", "5"],
        ["patata", "11"],
        ["Limon", "2"]
    ];

        $nombre=array_column($productos,0);
        array_multisort($nombre,SORT_ASC,$productos);

    foreach($productos as $producto){
        list($nombre,$precio)= $producto;
        ?>
        <tr>
            <td><?php echo $nombre ?></td>
            <td><?php echo $precio ?></td>
        </tr>
        <?php
    }
     ?>
    </table>

    <table class = "table table-dark" >
    <tr>
            <th>Total Precio</th>
            <th>Total Productos</th>
        </tr>
        <?php
        $total=0;
        $totalP=0;
        foreach ($productos as $producto) {
            list($nombre,$precio)=$producto;
            $total +=$precio;
            $totalP++;
        ?>
            <tr>
                <td><?php echo $total ?></td>
                <td><?php echo $totalP ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h2>Ejercicio 2</h2> 
    <table class = "table table-info" >
        <tr>
            <td>Producto</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>subtotal</td>
        </tr>
    
        <?php
    $productos2=[
        ["Sandia", "5","3"],
        ["patata", "11","2"],
        ["Limon", "2","4"]
    ];
    $nombre1=array_column($productos2,0);
    array_multisort($nombre1,SORT_ASC,$productos2);

    foreach($productos2 as $producto){
    list($nombre1,$precio,$cantidad)= $producto;
    ?>
    <tr>
        <td><?php echo $nombre1 ?></td>
        <td><?php echo $precio ?></td>
        <td><?php echo $cantidad ?></td>
        <td><?php echo $cantidad * $precio?></td>

    </tr>
    <?php
}
 ?>
</table>

<table class = "table table-dark" >
        <tr>
            <th>Total Precio</th>
            <th>Total Productos</th>
        </tr>
        <?php
        $total1=0;
        $totalP1=0;
        foreach ($productos2 as $producto) {
            list($nombre1,$precio,$cantidad)=$producto;
            $total1 +=$precio*$cantidad;
            $totalP1+=$cantidad;
        ?>
            <tr>
                <td><?php echo $total1 ?></td>
                <td><?php echo $totalP1 ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h2>Ejercicio3</h2>
    <?php
      $numeros=[];
    for($i=1;$i<50;$i++){
        $numeros[]=$i;
    }
        foreach($numeros as $numero){
            if($numero % 3 == 0) {
                unset($numeros[$numero]);
               echo  "$numero ", ",";
            }
        }
    ?>

    <h2>Ejercicio 4</h2>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>