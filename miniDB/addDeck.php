<?php
include "include/db.php";
include "include/functions.php";


addSubmittedDeck();
grabAllFromDB();
?>
<?php include "include/header.php"?>
   <form action="addDeck.php" method="POST">
              
        <div class="form-group">
            <label for="deckname">Deck Name</label>
            <input type="text" name="deckname" class="form-control">
        </div>
               
        <div class="form-group">
            <label for="format">Format</label>
            <input type="text" name="format" class="form-control">
        </div>
                      
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
   
   </form>
   <div class="col-sm-6">
        <?php
           showAllinDB($result);
        ?>
    </div>
   
      
 <?php include "include/footer.php"?>
