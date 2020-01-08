<?php


session_start();
if (isset($_SESSION["username"])){
    echo "<form action='remove_handle.php' method='GET'>
    <label for='itemRemove'>Item name:</label>
    <input type='text' id='itemRemove' name='itemRemove' placeholder='Enter item or a word that you want to remove' size='50'>
    <input type='submit' value='Remove'>
    </form>";
} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    

?>