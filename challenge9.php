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

$product=[
    
    ['name' => 'Laptop', 'category' => 'Electronics'],
    ['name' => 'Phone', 'category' => 'Electronics'],
    ['name' => 'Tablet', 'category' => 'Electronics'],
    ['name' => 'Headphones', 'category' => 'Accessories'],
    ['name' => 'Keyboard', 'category' => 'Accessories'],

];

if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=[];
}


if($_SERVER['REQUEST_METHOD'] === "POST"){

    $item = $_POST['item'];

    if(!in_array($item,$_SESSION['cart'])){
        $_SESSION['cart'][] = $item;
    }
    header("Location:" . $_SERVER['PHP_SELF']);
    exit;
    }

?> 
<h2>Cart:<?= count($_SESSION['cart']) ?> items</h2>
<ul>
    <?php foreach ($product as $p): ?>
        <li>
            <?= $p['name']?>
            <form method="POST">
                <input type="hidden" name="item" value="<?= $p['name']?>">
                <button type="submit">Add to Cart</button>

            </form>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>