<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

// Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
$number = 1;

if($number == 1) {
	echo "i love PHP" . "<br>";
} elseif($number == 2) {
	echo "i dont love PHP";
} else {
	echo "i neither like or dislike PHP";
}
	
// Step 2: Make a for loop  that displays 10 numbers
for($i = 0; $i < 10; $i++) {
	echo $i . "<br>";
}

// Step 3 : Make a switch Statement that test against one condition with 5 cases

switch($number) {
	case 1: 
		echo "the number is one";
		break;
	case 2: 
		echo "the number is two";
		break;
	case 3: 
		echo "the number is three";
		break;
	case 4: 
		echo "the number is four";
		break;
	case 5: 
		echo "the number is five";
		break;
}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>