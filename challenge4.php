<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    for($i =10 ; $i>=1 ; $i--){

    echo $i .  "<br>";
    }
    
    echo "----------------------------------- <br>";
    
    for($p = 2; $p <= 20; $p +=2){

     echo $p . "<br>";   
    }

    echo "----------------------------------- <br>";
    $count=0;
    for($n=1; $n <= 50 ; $n++){ 
        if ($n % 2 == 0 ){
            $count +=1; 
        }
    }
    echo $count . "<br>";
    echo "----------------------------------- <br>";
    $s=1;
    while($s <= 10){
        $s ++;
        echo "*" ;
    }
    echo "<br>-----------------------------------<br>";
    
    for($s1 = 1; $s1 <= 5 ; $s1++ ){
        
    for($s2 = 1 ;$s2 <= $s1 ; $s2++ ){

            echo "*";
        }
        echo "<br>";
    }

    ?>
</body>
</html>