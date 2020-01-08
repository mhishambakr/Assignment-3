<?php


session_start();
if (isset($_SESSION["username"])){
    echo "<form action='edit_handle.php' method='GET'>
    <label for='itemEdit'>Item name:</label>
    <input type='text' id='itemEdit' name='itemEdit' placeholder='Enter item or a word that you want to edit' size='50'><br>
    <label for='itemEditNew'>Item new name:</label>
    <input type='text' id='itemEditNew' name='itemEditNew' placeholder='Enter new item name' size='50'><br>
    <label for='itemEditNewPrice'>Item new price:</label>
    <input type='text' id='itemEditNewPrice' name='itemEditNewPrice' placeholder='Enter new item price' size='50'><br>
    <input type='submit' value='Edit'>
    </form>";
} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    

?>