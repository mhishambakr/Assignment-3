<?php


session_start();
if (isset($_SESSION["username"])){


    $itemRemove = $_GET["itemRemove"];

    foreach($_SESSION["products"] as $item_name => $item_price){
        if (stripos($item_name, $itemRemove) !== false){
            unset($_SESSION["products"][$item_name]);
            
        }
    }
    echo "Go to <a href='array_sort.php'>Arrays</a>"."</br>";

} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    

?>

