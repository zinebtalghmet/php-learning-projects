<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function greetUser($username){

        echo "Hello," . $username . "! Ready to code?";
    }
    
    greetUser(" Zineb");

    echo "<br>-----------------------------------<br>";
    
    function calculateArea($width,$height){
        
    return $Area = $width * $height;
    
    }
        
    $totalarea =calculateArea(2,2);
    echo "The total area is $totalarea  square units.";
    echo "<br>-----------------------------------<br>";

    function isAdult($age){
        return $age >=18;

    }
    $age=20;
        if(isAdult($age)){
            echo "Access Granted";
        }else{
            echo "Access Denied.";
        }
    echo "<br>-----------------------------------<br>";

    
    function multiplyNumbers($a,$b){
        
        if (is_numeric($a) && is_numeric($b)){

            return $a * $b ;

        } else {
            echo "Error: Invalid Input.";
        }
     }
        echo multiplyNumbers(5,10) . "<br>";
        echo multiplyNumbers(5,"apple");

    echo "<br>-----------------------------------<br>";

    function manualReverse($text){
        $resultat = "";
      for($i = strlen($text) - 1 ; $i >= 0 ; $i--){

        $resultat = $resultat . $text[$i];

        }
        return $resultat;
    }
    echo manualReverse('Zineb');

    ?>
</body>
</html>