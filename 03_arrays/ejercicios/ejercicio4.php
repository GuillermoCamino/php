<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

$series = [
    [" edgeRunner", "Netflix", 1],
    ["la casa del dragon", "HBO", 1],
    [" the bigbang theory", "Netflix", 10],
    [" Vikingos ", "HBO", 6],
    ["andor", "Disney+", 1],
    ["Dora la exploradora ", " Disney +", 3],
    ];
    ?>
    <table border=1px>
        <tr>
            <th>Titulo</th>
            <th>Plataforma</th>
            <th>Temporadas</th>
        </tr>
        <?php
        foreach ($series as $serie){
            list ($titulo,$plataforma,$temporadas) = $serie;
        
        ?>
        <tr>
            <td><?php echo $titulo?></td>
            <td><?php echo $plataforma?></td>
            <td><?php echo $temporadas?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>