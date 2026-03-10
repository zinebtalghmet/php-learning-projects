<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
    <?php
$name = '';

   if($_SERVER['REQUEST_METHOD']==='POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    
   if(empty($email)){
    
   echo "The email is required";

   } elseif(!strpos($email,"@")){
    echo "the email doesnt contain an '@' ";
   }else{
    echo 'The form is submitted successfully';
    $name ="";
   }

}
?> 
    <form action="" method="POST">
            <input type=text name='name' placeholder = 'Enter your name' value="<?php echo htmlspecialchars($name) ;?>">
            <input type=text name='email' placeholder = 'Enter your adresse email'>
            <textarea  name='message' placeholder = 'Feel free'></textarea>
            <button type="submit" name="submit">Send</button>
</form>         

   

    
    
    
    
    
    
    
    
    
    
    

</body>
</html>