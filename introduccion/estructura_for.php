<hi> Estructura for</h1>
<ul>
<?php 
    //$a = rand(1,10);
      //$b = rand(11,20);
    //echo "<p> A=$a</p>";
       // echo "<p> B=$b</p>";


    //ejercicio 1

    /*for($i=1; $i <= 10; $i++){
        $a = rand(1,10);
        if ($a %2==0){
        echo "<li>$a es par </li>";
    }else{
        echo "<li>$a es impar </li>";
    }
}*/

    //ejercicio 2 chapuzero
    echo "[";
    for($i=3; $i <= 30; $i+=3){
    if ($i <30){
        
        echo "$i,";
             
    }else{
        echo "$i";
    }
    }
    echo "]";
    
    


    /*for($i=5; $i <= 50; $i+=5){
       
        echo "<li>$i</li>";
        
    }*/
    
    /*for($i= $a ;$i <=$b; $i++){
        echo "<li>$i</li>";
    }*/

    
?>
</ul>