<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	//  Step 1 -Make a variable with some text as value
	$text = "hello world";
	// 	Step 2 - Use crypt() function to encrypt it
	// 	Step 3 - Assign the crypt result to a variable
	echo "with hashing and salting" . "<br>";
	$hash = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hash_and_salt = $hash . $salt;
	$result1 = crypt($text, $hash_and_salt);
	// 	Step 4 - echo the variable
	echo $result1 . "<br>";
	//without hashing 
	echo "without hashing" . "<br>";
	$result2 = crypt($text, $salt);
	echo $result2;
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>