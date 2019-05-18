<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

//  Step1: Define a function and make it return a calculation of 2 numbers
function calculate() {
	$number1 = 254;
	$number2 = 354;

	$sum = $number1 + $number2;
	
	return $sum;
}

$result = calculate(464, 273);
echo $result . "<br>";
// Step 2: Make a function that passes parameters and call it using parameter values

function Hola($hello) {
	echo $hello;
}


	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>