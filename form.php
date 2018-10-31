<?php
if(isset($_POST['submit'])){
    echo "Welcome";
    
} 

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<form action="form.php" method="POST">
    <input type="text" placeholder="Enter Username">
    <br>
    <input type="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">
</form> 
 
    
</body>
</html>