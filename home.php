<?php
session_start();
if (isset($_SESSION["username"])){
    

    echo "Welcome ".$_SESSION["username"]."</br>";

    echo "Problem 1: calculate price from <a href='buy.php'>here</a>"."</br>";

    echo "Problem 3: search for items and prices from <a href='search_form.php'>here</a>"."</br>"; 

    echo "Problem 4: <a href='array_sort.php'>Sorted Products</a>"."</br>";

    echo "Problem 5: <a href='add_item.php'>Add Items</a>"."</br>";

    echo "Problem 6: <a href='remove_item.php'>Remove Items</a>"."</br>";

    echo "Problem 7: <a href='edit_item.php'>Edit Items</a>"."</br>";
    
    echo "<a href='logout.php'>Log Out</a>"."</br>";
    
} else {
    echo "<a href='index.php'>Login</a>"."</br>";
}

?>

