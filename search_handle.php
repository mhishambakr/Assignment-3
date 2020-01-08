<?php


session_start();
if (isset($_SESSION["username"])){


    $item = $_GET["item"];

    $_SESSION["item"] = $item;


    foreach($_SESSION["products"] as $item_name => $item_price){
        if (stripos($item_name, $item) !== false){
            echo $item_name." costs ".$item_price. " pounds "."</br>";
        }
        
    }

} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    

?>

