<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		<a href="9.php?source=30134">Click here</a>
		<br>
	
	<?php 
                
        $exp = time() + (60*60*24*7);
    
      setcookie('question2name', 'some value', $exp);
            
                
                
    if(isset($_GET['source'])){
        echo $_GET['source'];
        echo "<br>";
    }
            

    if(isset($_COOKIE['question2name'])){
        echo $_COOKIE['question2name'];
    }
                
             echo "<br>";   
    session_start();
    
    $_SESSION['message'] = "Hello Hello";
                
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        }
    

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>