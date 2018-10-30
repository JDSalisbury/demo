<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
	Step 2: Make a forloop  that displays 10 numbers
	Step 3 : Make a switch Statement that test againts one condition with 5 cases
 */
    
$num1 = 0;
    
if($num1 == 1){
    echo"i wont print";
    echo "<br>";
} elseif($num1 == -1){
    echo"i wont print either";
    echo "<br>";
}else{
    echo"i print";
    echo "<br>";
};
    
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9 , 0];

foreach($numbers as $num){
    echo $num;
    echo "<br>";
};

switch($num1){
    case 1:
        echo "it is 1";
        break;
    case 2:
        echo "it is 2";
        break;
    case 3:
        echo "it is 3";
        break;
    case 4:
        echo "it is 4";
        break;
    case 5:
        echo "it is 5";
        break;
    default:
        echo "idk but this will probably print";
}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>