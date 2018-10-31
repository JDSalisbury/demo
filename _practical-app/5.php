<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it
	Step 2:  Use a pre-built string function here and echo it
	Step 3:  Use a pre-built Array function here and echo it
 */

    //maths
    echo pi();
    echo "<br>";
    //string stuff
    $str = "something something darkside";
    echo strrev($str);
    echo "<br>";
    //array thing
    $ary = [1, "number", "hat", "bear", "fish", "turtle", "lemon"];
    $randKey =  array_rand($ary);
    echo $ary[$randKey];

    
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>