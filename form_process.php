<?php
if(isset($_POST['submit'])){       
$username = $_POST['username'];
$password = $_POST['password'];
    
    if(strlen($username) < 5){
        echo "username has to longer than five";
    }else {
        echo "Welcome" . " " . $username;
    }
}  
?>