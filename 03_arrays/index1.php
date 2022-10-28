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
<table class = "tabla" border="1px">
    <tr>
        <td>Titulo</td>
        <td>consola</td>
        <td>precio</td>

    </tr>
<?php
$juegos = [
    ["pokemon diamante", "nintendo switch", 40],
    ["god of war", "PS4", 70],
    [" the binding of isaac", "pc", 20],
    [" League of legends ", "pc", 0],
    ["need for speed", "ps5", 80],
    ["pokemon escarlata", "Nintendo switch", 60],
];
    $nuevo_juego = ['Fruit Ninja', 'Movil',0];

    array_push($juegos,$nuevo_juego);

    unset($juegos[1]);

    $titulo = array_column($juegos,0);
    $consola=array_column($juegos,1);
    array_multisort($consola,SORT_ASC,$titulo, SORT_DESC, $juegos);

 foreach($juegos as $juego){
    list($titulo,$consola, $precio)= $juego;
    echo "$titulo, $consola, $precio";
    ?>
    <tr>
    <td><?php echo $titulo ?></td>
    <td><?php echo $consola ?></td>
    <td><?php echo $precio ?></td>
    </tr>
    <?php
    echo "<br>";
 }

?>
</table>
</body>
</html>

