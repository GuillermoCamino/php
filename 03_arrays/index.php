<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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
        print_r($dni);

    ?>
</body>
</html>