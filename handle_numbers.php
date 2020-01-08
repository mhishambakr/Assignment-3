<?php


session_start();
if (isset($_SESSION["username"])){


    $item_num = $_GET["item_num"];
    $price = $_GET["price"];
    $total = $item_num * $price;
    if ($total < 1000){
        $discount = 0.1;
    } else {
        $discount = 0.15;
    }

    $final_price = $total * (1-$discount);
    echo "total before discount = ".$total."</br>";

    echo "final price = ".$final_price;

} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    

?>