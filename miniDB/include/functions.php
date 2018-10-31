<?php
function grabAllFromDB(){
    global $connection;
    global $result;
    $query = "SELECT * FROM decks";
    
    $result =  mysqli_query($connection, $query);

    if(!$result){
        die("query failed" . mysqli_error());
    }
}

function showAllinDB($result){
    while($row = mysqli_fetch_assoc($result)){
                echo  "<pre>";
                    echo $row['id'];
                    echo "<br>";
                    echo $row['deckname'];
                    echo "<br>";
                    echo $row['format'];
                echo  "</pre>";                
            } 
}


function addSubmittedDeck(){
    global $connection;
    if(isset($_POST['submit'])){
$deckname = $_POST['deckname'];
$format = $_POST['format'];
    echo $deckname;
    echo "<br>";
    echo $format;
    
    $deckname = mysqli_real_escape_string($connection, $deckname);
    $format = mysqli_real_escape_string($connection, $format);


    
    $query2 = "INSERT INTO decks(deckname, format)";
    $query2 .= "VALUES ('$deckname', '$format')";
    
    $result2 =  mysqli_query($connection, $query2);
    if(!$result2){
        die("query failed" . mysqli_error());
    }
}
}
?>