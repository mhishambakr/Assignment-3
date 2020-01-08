<?php


session_start();
if (isset($_SESSION["username"])){

    

    echo "<form action='search_handle.php' method='GET'>
    <label for='item'>Item name:</label>
    <input type='text' id='item' name='item' placeholder='Enter item or a word'>
    <input type='submit' value='search'>
    </form>";
} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    

?>