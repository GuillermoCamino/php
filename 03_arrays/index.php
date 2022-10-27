<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
        $videojuegos = array(
            "juego1"=> "Cyberpunk 2077",
            "juego2"=> "Minecraft",
            "juego3"=> "My little ponnt"
        );
        print_r($videojuegos);
           echo "<p></p>";
        $consolas= [
            "consola1" => "PS4",
            "consola2" => "PS5",
            "consola3" => "Nintendo switch"
        ];
        print_r($consolas);
        echo "<p></p>";
        $dni= [
            "26265798M"=>"Guillermo",
            "26265147Y"=>"Natalia",
            "57413514H"=>"Gonzalo"
        ];
        echo $dni["26265798M"];
        echo "<p></p>";


        $dni ["12345678D"] = "Rodolfo";
        $dni ["26265147Y"] = "Nata";


        unset($dni["26265798M"]);


        print_r($dni);

        echo "<p></p>";

        echo "Hay " . count($dni) . " personas";
        echo "<p></p>";
        $series=[
             'la casa de papel',
            'El juego del calamar',
            'Alice in borderland',
             'The witcher'
        ];
        
        array_push($series,"Cuentame","Dark");

        $series[] = "Big Bang Theory";

        $series[10]= "La que se avecina";

        array_push($series, "Haikyuu");

        $series[10]= "aqui no hay quien viva";

        unset($series[10]);

        $series=array_values($series);

        foreach($series as $indice => $serie){
            echo $indice . "=> " . $serie . "<br>"; 
        }
        echo "<p></p>";

        asort($dni);
        krsort($dni);
        ?>

    <table class = "tabla" border="1px">
        <tr>
            <td>DNI</td>
            <td>Nombre</td>
        </tr>
        <?php 
    foreach($dni as $key =>$dnis){
       
        echo $key . "=>" . $dnis ."<br>";
    ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $dnis ?></td>
        </tr>
        <?php
    }
 ?>
    </table>
    <?php
        print_r($series);

        echo "<p></p>";
        ?>
    <ul>
    <h3>lista de series</h3>

        <?php
        rsort($series);
        for($i=0;$i<count($series);$i++){
        ?>
        <li><?php echo $series[$i] ?></li>

        <?php
        }
        ?>
    </ul>

    <?php
        echo "<br><br>";
        
    ?>

    <ol>
        <?php
        $i=0;
        while($i < count($series)) {
            ?>
        <li><?php echo $series[$i] . "<br>" ?></li>;
        <?php
            $i++;
        }
        ?>
    </ol>

    <?php
    $frutas_1=["Melocoton" => 0.5,"Sandia" => 1,"Kiwi" => 2];

    $frutas_2=["Sandia" => 1,"Melocoton" => 0.5,"Kiwi" => 2];

    if ($frutas_1 == $frutas_2){
        if ($frutas_1 === $frutas_2){
        echo "<p>las frutas son las mismas y estan igual ordenadas</p>";
        }else{
        echo "<p>las frutas son las mismas pero no estan igual ordenadas</p>";
        }
    }else{
    echo "<p>los arrays no tienen los mismos elementos</p>";
    }

    ?>
</body>

</html>