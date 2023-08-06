<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controller/message.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include(ROOT_PATH . "/app/include/head_links.php"); ?>
	<title>Pre Natal Info System</title>
</head>
<body>
	<!-- Header -->
	<section class="header">
	<!-- Navlinks -->
	<?php include(ROOT_PATH . "/app/include/navigation_links.php"); ?>
		<div class="text-box">
			<h1>Are you pregnant?</h1>
			<p>Do You Need Answers To Some Questions? <br>You Are Welcome</p>
			<a href="user/chat.php" class="hero-btn">Use the User Login Above</a>
			
			
		</div>
	</section>
	<!-- Chat box section -->
	<?php include(ROOT_PATH . "/app/include/chat.php"); ?>
	<!--- Our Values --->
	<?php include(ROOT_PATH . "/app/include/our_values.php"); ?>
	<section class="cta">
		<h1>Do You Need Answeres To Some Questions On Pregnancy? </br>Speak to A Doctor</h1>
		<a href="user/chat.php" class="hero-btn">Meet A Doctor</a>
		
	</section>

	<!--Page Footer-->
	<?php include(ROOT_PATH . "/app/include/footer.php"); ?>

	<script type="text/javascript" src="assets/js/app.js"></script>
	</script>
</body>
</html>