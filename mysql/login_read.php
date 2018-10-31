<?php include "db.php";

//learing CRUD
    

    
    $query = "SELECT * FROM users";
    
    $result =  mysqli_query($connection, $query);

    if(!$result){
        die("query failed" . mysqli_error());
    }




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