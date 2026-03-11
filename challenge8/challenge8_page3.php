<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

session_start();

echo "<h2>Session Started</h2>";
echo "Hello " . $_SESSION['username'] . " , you love " . $_SESSION['programing']. "!";


  ?>  
  <br>
</body>
</html>