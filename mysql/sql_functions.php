<?php include "db.php";
//learing CRUD


function selectAllUsersInDB(){
    global $connection;
    global $result;
    $query = "SELECT * FROM users";
    $result =  mysqli_query($connection, $query);
    
     if(!$result){
        die("query failed: SELECT * FROM users " . mysqli_error());
    }

}

function showAllData() {
    
    global $connection;
    
    $query = "SELECT * FROM users";
    $result =  mysqli_query($connection, $query);
    
     if(!$result){
        die("query failed: SELECT * FROM users " . mysqli_error());
    }
   
   

   while($row = mysqli_fetch_assoc($result)){
       $id =  $row['id'];
       echo "<option value='$id'>$id</option>";

    }
}

function updateByID(){
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";
    
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("query error");
        };
    
}

function deleteRows(){
        global $connection;
        $id = $_POST['id'];
    
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";
    
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("query error");
        };
    
}
?>