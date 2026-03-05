<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>One cup of tea costs 5 DH</h1>

<form method="post">
    <label>Number of cups:</label>
    <input type="number" name="num_cup" min="1"><br>
    <label>Are you a student?</label>
    <input type="checkbox" name="is_student">
    <button type="submit">Calculate</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
$tea_price = 5;
$num_cup = $_POST['num_cup'];
$is_student = isset($_POST['is_student']);


$total = $tea_price * $num_cup;
$discount= $total * 0.20;

$base_total = $total - $discount;
$student_total = $base_total - $num_cup;
$nostudent_total= $total - $num_cup;




if($is_student && $num_cup > 5) {

    echo "the total is: " . $student_total . ' DH' ;

} elseif($is_student && $num_cup <= 5 ) {

    echo "The total is :" . $base_total . ' DH' ;
    
} elseif($is_student == false && $num_cup > 5 ) {

    echo 'the total is :' . $nostudent_total . ' DH'  ;

}else{

    echo 'the total is :' . $total . ' DH' ;

}
} 
?>

</body>
</html>