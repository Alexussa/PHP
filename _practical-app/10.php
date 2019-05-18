<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

// 	 Step 1: Use the Make a class called Dog
class Dog {
	// 		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
	var $eyeColor = "blue";
	var $furColor = "brown";
	var $age = 5;
	// 		Step 3: Make a method named ShowAll that echos all the properties
	function ShowAll() {
		echo $this -> eyeColor . "<br>" .
			 $this -> furColor . "<br>" .
			 $this -> age . "<br>";
	}
}

// 		Step 4: Instantiate the class / create object and call it pitbull
$pitbull = new Dog();
// Step 5: Call the method ShowAll
$pitbull -> ShowAll();
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>