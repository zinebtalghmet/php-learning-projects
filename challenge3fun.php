<?php

function isAdult($age){
    return $age >= 18;
}
$age= 28;
if(isAdult($age)){
    echo "<h1>Access Granted</h1>";
}else{
    echo  "<h1>Access Denied.</h1>";
}



?>