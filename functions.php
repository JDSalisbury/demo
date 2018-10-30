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
echo "<br>";


function diceRoller($sidesOnDice, $numberOfDice, $modifier){
    $total = 0;
    for($i=1; $i<=$numberOfDice; $i++){
        $dice = random_int(1, $sidesOnDice);
        $total += $dice;
    }
    echo $total + $modifier;
};
    
diceRoller(4,2,10);
    echo "<br>";
diceRoller(4,2,10);
    echo "<br>";
diceRoller(4,2,100);
    echo "<br>";
diceRoller(4,2,1000);
    echo "<br>";
?>
   
   <h1><?php echo $title ?></h1>
    
</body>
</html>