<?php

if(!isset($_POST['x'],$_POST['y'])){
    header('location: index.php?error=1');
}

$x = $_POST['x'];
$y = $_POST['y'];

if($x >= 0 && $y >= 0 && $x < getrandmax() && $y < getrandmax()){
    $random = rand($x, $y);
}

echo $random;

