<?php 
include "db.php";
include "sql_functions.php";
//learing CRUD
if(isset($_POST['submit'])) {
    updateByID();
};   
?>
<!DOCTYPE html>
<?php include "includes/header.php"?>
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
<?php include "includes/footer.php"?>