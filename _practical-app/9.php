<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	

	<!--  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it -->
	<a href="9.php?id=10">CLICK HERE</a>
	<?php 
	// 	Step 2 - Set a cookie that expires in one week
	$name = "Cookie";
	$value = 123223;
	$expiration = time() + (60*60*24*7);
	// 	Step 3 - Start a session and set it to value, any value you want.
	session_start();
	$_SESSION['value'] = 100;
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>