<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
<?php

function say_Something(){
    echo "say Something";
};
    
function addTwoNumbers($num1, $num2){
    echo $num1 + $num2;
}
    
$title = "this is a dynamic title"; 
say_Something();
echo "<br>";
addTwoNumbers(3, 5);
?>
   
   <h1><?php echo $title ?></h1>
    
</body>
</html>