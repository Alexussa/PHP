<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


//  Step1: Use a pre-built math function here and echo it
	echo pow(2, 2) . "<br>";

// 	Step 2:  Use a pre-built string function here and echo it
	echo strlen("hello world") . "<br>";

// 	Step 3:  Use a pre-built Array function here and echo it
	$list = [34, 62, 67];
	echo max($list) . "<br>";

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>