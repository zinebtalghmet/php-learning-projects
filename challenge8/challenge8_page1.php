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
$_SESSION['username']= $_POST['name'] ?? '';
header("Location: challenge8_page2.php");
}

echo "<h2>Session Started</h2>";
//echo "<p> The user ID is" . session_id() . "</p>";
//echo $_SESSION['username'];

  ?>  
  <form action="" method="POST">
    <p>Username :</p>
    <input type="text" name="name" placeholder="Enter your username"> 
    <button type="submit">Save</button><br>
        <a href="challenge8_page2.php">Next Page</a>

</body>
</html>