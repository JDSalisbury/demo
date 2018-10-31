<?php 
include "db.php";
include "sql_functions.php";
//learing CRUD
if(isset($_POST['submit'])) {
    deleteRows();
};   
selectAllUsersInDB();
?>

<?php include "includes/header.php"?>
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
    
<?php include "includes/footer.php"?>