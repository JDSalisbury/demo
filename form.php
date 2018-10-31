

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<head>
<?php
if(isset($_POST['submit'])){       
$username = $_POST['username'];
$password = $_POST['password'];
    
echo "Welcome" . " " . $username;
}  
?>
</head>

<form action="form.php" method="POST">
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="password" name="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">
</form> 
 
    
</body>
</html>