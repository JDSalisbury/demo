<?php
   $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    echo "<br>";
    if(!$connection){
        die("database connection error");
    }
?>