<?php
   $connection = mysqli_connect('localhost', 'root', '', 'minidb');
    echo "<br>";
    if(!$connection){
        die("database connection error");
    }
?>