<?php


session_start();
if (isset($_SESSION["username"])){
    
    echo "<form action='handle_numbers.php' method='get'>
    <label for='item_num'>Enter Number of Items:</label>
    <input type='number' id='item_num' name='item_num' min='0'>
    <label for='price'>Enter price</label>
    <input type='number' id='price' name='price' min='0'>
    <input type='submit' value='Submit'>
    </form>";
    
    
} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    

?>
