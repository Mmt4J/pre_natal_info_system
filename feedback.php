<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controller/feedback.php");

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
		<?php include(ROOT_PATH . "/app/include/head_links.php"); ?>
    	<title>feedback</title>
    </head>
    <body>
    	<section class="sub-header">
    		<!-- Navlinks -->
			<?php include(ROOT_PATH . "/app/include/navigation_links.php"); ?>
    		<h1>Drop Us a Feedback</h1>
    	</section>

    	<!--- Blog page content --->
        <section class="blog-content">
            <div class="row1">
                <div class="blog-left">
                    <div class="comment-box">

                        <form action="feedback" method="post" class="comment-form">
                            <input type="text" name="name" placeholder="Enter Name">
                            <input type="email" name="email" placeholder="Email">
                            <textarea name="comment" id="" rows="5" placeholder="Your Comment"></textarea>
                            <input type="submit" name="feedback" class="hero-btn red-btn">
                        </form>
                    </div>
                </div>
            </div>
        </section>

	<!--Page Footer-->
	<?php include(ROOT_PATH . "/app/include/footer.php"); ?>

	<script type="text/javascript" src="assets/js/app.js"></script>
    </body>
    </html>