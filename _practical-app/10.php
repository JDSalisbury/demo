<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/

	class Dog {
		public $furColor;
		public $breed;
		public $age;

		//construct not constructor also this has to touch the arrow has to touch the var
		public function __construct($furColor, $breed, $age){
			$this->furColor = $furColor;
			$this->breed = $breed;
			$this->age = $age;
		}

		public function toString(){
			echo "The dogs fur color is: " . $this->furColor . " The dogs breed is: " . $this->breed . " and its " . $this->age . "yrs old.";
		}
	}

	$spot = new Dog("blue", "Wolf", 10);

	echo $spot -> toString();
	


	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>