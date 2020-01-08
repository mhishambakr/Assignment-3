<?php
session_start();
if (isset($_SESSION["username"])){

    echo "<form action='add_item_handle.php' method='get'>
    <label for='newItem'>Enter new Item</label>
    <input type='text' id='newItem' name='newItem' placeholder = 'Enter new item'>
    <label for='newItemPrice'>Enter Price:</label>
    <input type='text' id='newItemPrice' name='newItemPrice' placeholder = 'Enter price'>
    <input type='submit' value='Add Item'>
    </form>";

} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}
?>

