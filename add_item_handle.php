<?php

session_start();
if (isset($_SESSION["username"])){

    $newItem = $_GET["newItem"];
    $newItemPrice = $_GET["newItemPrice"];
    $_SESSION["products"][$newItem] = $newItemPrice;

    echo "Go to <a href='array_sort.php'>Arrays</a>"."</br>";

} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    
?>