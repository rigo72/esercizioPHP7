<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 16;
        $y = 7;
        $i = 0;
        if($x>$y){
            echo "<h1>Maggiore</h1>";
            $i = 1;
        }elseif($x<$y){
            echo "<h1>Minore</h1>";
            $i = 2;
        }else{
            echo "<h1>Uguale</h1>";
            $i = 0;
        }
        
        if($i == 1){
            if($x < 10){
                echo "<p>{$x} è minore di 10</p>";
            }elseif(x>10 && x<20){
                echo "<p>{$x} è compreso tra 10 e 20</p>";
            }elseif(x>21 && x<30){
                echo "<p>{$x} è compreso tra 21 e 30</p>";
            }else{
                echo "<p>{$x} è maggiore di 30</p>";
            }
        }elseif($i == 2){
            if($x < 10){
                echo "<p>{$x} è minore di 10</p>";
            }elseif(x>10 && x<20){
                echo "<p>{$x} è compreso tra 10 e 20</p>";
            }elseif(x>21 && x<30){
                echo "<p>{$x} è compreso tra 21 e 30</p>";
            }else{
                echo "<p>{$x} è maggiore di 30</p>";
            }
        }else{
            if($x < 10){
                echo "<p>{$x} è minore di 10</p>";
            }elseif(x>10 && x<20){
                echo "<p>{$x} è compreso tra 10 e 20</p>";
            }elseif(x>21 && x<30){
                echo "<p>{$x} è compreso tra 21 e 30</p>";
            }else{
                echo "<p>{$x} è maggiore di 30</p>";
            }
        }
        
    ?>
</body>
</html>