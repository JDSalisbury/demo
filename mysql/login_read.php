<?php include "db.php";

//learing CRUD
    

    
    $query = "SELECT * FROM users";
    
    $result =  mysqli_query($connection, $query);

    if(!$result){
        die("query failed" . mysqli_error());
    }




?>


<?php include "includes/header.php"?>
   <div class="container">
       <div class="col-sm-6">
          
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