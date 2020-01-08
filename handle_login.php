<?php

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


session_start();

$_SESSION["username"] = $username;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

echo "Welcome, go to <a href='home.php'>Home</a>";

$products = array("tshirt"=>200 , "shirt"=>80 , "pantalon"=>220 , "shoes"=>120 , "short"=>90 , "jacket"=>60 , "glasses"=>80 , "sunglasses"=>100);

$_SESSION["products"] = $products;

?>

