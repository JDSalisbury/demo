<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
<?php
    
$num = 3;   
    
switch($num){
    
    case 34:
    echo "it is 34";
    break;
    case 4:
    echo 'it is 4';
    break;
    case 5:
    echo 'it is 5';
    break;
    
    default:
    echo 'no match';
};
    
?>
   
   <h1><?php echo $num ?></h1>
    
</body>
</html>