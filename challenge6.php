<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <?php
    
    $category= $_GET['category'] ?? 'all';
    $products = [

    ['name' => 'Laptop', 'category' => 'Electronics'],
    ['name' => 'Phone', 'category' => 'Electronics'],
    ['name' => 'Tablet', 'category' => 'Electronics'],
    ['name' => 'Headphones', 'category' => 'Accessories'],
    ['name' => 'Keyboard', 'category' => 'Accessories'],

    ];
    
    $sort = $_GET['sort'] ?? 'asc';
    
  usort ($products , function($a,$b) use ($sort){

    if($sort === 'asc'){
        return strcmp($a['name'],$b['name']);
    }else{
        return strcmp($b['name'],$a['name']);
    }

});
 

 echo '<a href="?category=all&sort=' . $sort . '">All</a> <br>';
 
foreach($products as $product){
    $catt =($category === 'all'  || $product['category'] === $category ) ; 

    if($catt){

        echo $product['name'] . ' — ' .  $product['category'] . "<br>";

    }

}    
    
    ?>










</body>
</html>