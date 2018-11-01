<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
<?php

$managerie = ["cat", "dog", "bird"];
    
foreach($managerie as $animal){

    echo $animal;
    echo "<br>";

};
    
$title = "this is a dynamic title"    
    
?>
   
   <h1><?php echo $title ?></h1>
    
</body>
</html>