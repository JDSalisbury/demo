<?php
include "db.php";


if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
    echo $username;
    echo "<br>";
    echo $password;
    

    
    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";
    
    $result =  mysqli_query($connection, $query);
    if(!$result){
        die("query failed" . mysqli_error());
    }
}



?>
<?php include "includes/header.php"?>

   <div class="container">
       <div class="col-sm-6">
          
           <form action="login_create.php" method="POST">
             
              
               <div class="form-group">
                   <label for="username">Username</label>
                   <input type="text" name="username" class="form-control">
               </div>
               
               
               <div class="form-group">
                   <label for="password">Password</label>
                   <input type="text" name="password" class="form-control">
               </div>
               
               
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                
           </form>
           
       </div>
   </div>
    
<?php include "includes/footer.php"?>