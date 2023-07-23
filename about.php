<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include(ROOT_PATH . "/app/include/head_links.php"); ?>
	<title>About</title>
</head>
<body>
	<section class="sub-header">
		<!-- Navlinks -->
		<?php include(ROOT_PATH . "/app/include/navigation_links.php"); ?>
		<h1>ABout Us</h1>
	</section>
	
	<!--- About Us Content--->
	<section class="about-us">
		<div class="row">
			<div class="about-col">
				<h1>Lorem ipsum dolor sit amet</h1>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea nostrum expedita minus excepturi, porro molestias aliquid odio unde vitae provident repudiandae aspernatur in deleniti necessitatibus esse quisquam nobis autem.</p>
				<a href="" class="hero-btn red-btn">EXPLORE NOW</a>
			</div>
			<div class="about-col">
				<img src="assets/images/about.jpg" alt="">
			</div>
		</div>
	</section>

	<!--Page Footer-->
	<?php include(ROOT_PATH . "/app/include/footer.php"); ?>

	<script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>