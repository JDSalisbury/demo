<?php 
include "db.php";
include "sql_functions.php";
//learing CRUD
if(isset($_POST['submit'])) {
    updateByID();
};

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
   <div class="container">
       <div class="col-sm-6">
          
         <form action="login_update.php" method="POST">
             
              
               <div class="form-group">
                   <label for="username">Username</label>
                   <input type="text" name="username" class="form-control">
               </div>
               
               
               <div class="form-group">
                   <label for="password">Password</label>
                   <input type="text" name="password" class="form-control">
               </div>
               
               <div class="form-group">
                   <select name="id" id="">
                      <?php

                       showAllData();
                       ?>
                   </select>
               </div>
               
               
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
                
           </form>
        
       </div>
   </div>
    
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>