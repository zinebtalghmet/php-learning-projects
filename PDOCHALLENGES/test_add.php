<?php
include 'db.php';
$title = 'CANDID';
$author = 'MOLIERE';
$price = 90;

$sql = "INSERT INTO books (title ,author,price) VALUES (:title,:author,:price) ";
$stat = $pdo->prepare($sql);
$stat->execute(['title'=>$title,'author'=>$author,'price'=>$price]);

$id=$pdo->lastInsertId();
echo "Succsess! Book added with ID:" . $id;




?>