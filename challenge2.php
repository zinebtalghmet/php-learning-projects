<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter your age:</label>
        <input type="number" name="age" min="0">
        <button type="submit">Get Price</button>
    </form>

    <?php

    
    if(isset($_POST['age'])){   

    $age = ($_POST['age']);

    if($age < 12  ){
     
     $price = 20;   
     echo "Le prix est " . $price .  " DH" . "\nSpecial: Children's Menu included!";

     }elseif($age >= 12 && $age<= 18){
        $price = 40;
        echo "Le prix est " . $price . " DH";

     }elseif($age > 60){
        $price = 30;
        echo "Le prix est " . $price . " DH"; 

     }else{
        $price = 60;
        echo "Le prix est " . $price . " DH";
     }
    }
     
    




    ?>
</body>
</html>