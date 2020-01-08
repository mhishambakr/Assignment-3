<?php

session_start();
if (isset($_SESSION["username"])){
    
    $_SESSION["products"];

    foreach ($_SESSION["products"] as $key => $value){
        echo $key." => ".$value.", ";
    }
    echo "<br>";
    ksort($_SESSION["products"]);
    foreach ($_SESSION["products"] as $key => $value){
        echo $key." => ".$value.", ";
    }
    echo "<br>";
    asort($_SESSION["products"]);
    foreach ($_SESSION["products"] as $key => $value){
        echo $key." => ".$value.", ";
    }
    echo "<br>";
} else {

    echo "<a href='index.php'>Login</a>"."</br>";

}    
    echo "<br>"




?>