<?php


session_start();
if (isset($_SESSION["username"])){

    $itemEdit = $_GET["itemEdit"];
    $itemEditNew = $_GET["itemEditNew"];
    $itemEditNewPrice = $_GET["itemEditNewPrice"];

    foreach($_SESSION["products"] as $item_name => $item_price){
        if ($item_name === $itemEdit){
            unset($_SESSION["products"][$item_name]);
            $_SESSION["products"][$itemEditNew] = $itemEditNewPrice;
        }
    }
    echo "Go to <a href='array_sort.php'>Arrays</a>"."</br>";

} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    

?>