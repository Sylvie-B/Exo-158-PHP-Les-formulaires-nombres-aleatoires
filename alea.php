<?php

$x = $_POST['x'];
$y = $_POST['y'];

if(!isset($_POST['x'],$_POST['y'])){
    header('location: index.php?error=1');
}

if($x >= 0 && $y >= 0 && $x < getrandmax() && $y < getrandmax()){
    $random = rand($x, $y);
}

echo $random;

