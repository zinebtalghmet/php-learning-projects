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

if($_SERVER['REQUEST_METHOD']==="POST"){
$_SESSION['programing']= $_POST['language'] ?? '';
header("Location:challenge8_page3.php");
}

echo "<h2>Session Started</h2>";
//echo "<p> The user ID is" . session_id() . "</p>";
//echo $_SESSION['username'];

  ?>  
  <form action="" method="POST">
    <p>Enter Your Favorite Programming Language:</p>
    <input type="text" name="language" placeholder="Enter a language programing"> 
    <button type="submit">Save</button><br>
 
</body>
</html>