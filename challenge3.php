<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Create an array of 5 friends and the money they owe you.
//  Loop through them, add up the total,
//  and highlight anyone who owes more than 100 DH. 
    
  $friends = [
    ['name'=> 'Zineb', 'money'=>100],
    ['name'=>'Kawtar', 'money'=>89],
    ['name'=>'Salwa' , 'money'=>150],
    ['name'=>'Ahmed' , 'money'=>500]
            ];
    $somme = 0;
    foreach($friends as $friend){
//echo $friend['name'] .  ":" . "The money they owe you is : " . $friend['money']  . "DH <br>";

    $somme += $friend['money'];

    if($friend['money'] > 100){

    echo $friend['name'] . "<br>";

    }

    }
    
    echo "The total is : " . $somme . "DH" ;
    ?>
</body>
</html>