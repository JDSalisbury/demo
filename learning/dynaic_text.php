<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
 <?php
    
$title = "title";
$num = 4+6.2;
$num2 = 20;
    
    
$numberList2 = [1, 2, 3, 4];
$numberList = array(123, "hello", 12);
//associative array
$names = array("first_name" => 'Jeff', "last_name" => 'Salisbury');

    
?>
   
   <h1><?php echo $title." ".($num2 + $num)?></h1>
   <p>
       <?php print_r($names)?>
   </p>
    
</body>
</html>