<?php 
include "db.php";
include "sql_functions.php";
//learing CRUD
if(isset($_POST['submit'])) {
    deleteRows();
};   
selectAllUsersInDB();
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
          
         <form action="login_delete.php" method="POST">
             <div class="form-group">
                  <input type="submit" name="submit" value="Delete" class="btn btn-primary">
                  <br>
                  <br>
                   <select name="id" id="">
                      <?php

                       showAllData();
                       ?>
                   </select>
               </div>
                                                          
           </form>
           
           <?php
  
           while($row = mysqli_fetch_assoc($result)){
               ?>
               <pre>
               <?php
                print_r($row);
                ?>
               </pre>
            <?php
           } 
        ?>
        
       </div>
   </div>
    
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>