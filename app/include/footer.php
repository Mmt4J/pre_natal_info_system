<footer class="page-footer">
		<div class="footer-content">
			<div class="content-section company-info">
				<h3 class="section-title">About Us</h3>
				<div class="company-bio">
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum laborum fugiat ea suscipit, dolor a iusto quasi consequuntur voluptate, quo ratione obcaecati iste voluptas reiciendis maiores voluptates quos! Excepturi nam facilis nostrum, eveniet corporis vitae eaque beatae illum libero et, quae.
				</br>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta error vitae sit asperiores ea quis.
				</div>
				<div class="social-links">
					<a href="#"><ion-icon class="social-icon" name="logo-facebook"></ion-icon></a>
					<a href="#"><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a>
					<a href="#"><ion-icon class="social-icon" name="logo-twitter"></ion-icon></a>
					<a href="#"><ion-icon class="social-icon" name="logo-youtube"></ion-icon></a>
					<a href="#"><ion-icon class="social-icon" name="logo-linkedin"></ion-icon></a>
				</div>
			</div>
			<div class="content-section helpful-links">
				<div>
					<h3 class="section-title">Helpful Links</h3>
					<ul>
						<li><a class="link" href="#">Home</a></li>
						<li><a class="link" href="#">Feedback</a></li>
						<li><a class="link" href="#">Contact Us</a></li>
						<li><a class="link" href="#">Admin Login</a></li>
						
					</ul>
				</div>
			</div>
			<div class="content-section contact-wrapper">
				<h3 class="section-title">Send us a message</h3>
				<form action="<?php echo BASE_URL . '/index.php'; ?>" method="post" class="contact-form">
					<div class="input-group">
						<input type="email" name="email" placeholder="Your email address..." class="input-control contact">
					</div>
					<div class="input-group">
						<textarea class="input-control contact" name="message" cols="30" rows="4" placeholder="Your message"></textarea>
					</div>
					<div class="input-group">
						<button type="submit" name="send-message" class="btn big-btn primary-btn">Send</button>
					</div>
				</form>
			</div>
		</div>

		<div class="copyright-info">
			<p class="center">Copyright &copy; 2023 | Pre-Natal Information System</p>
		</div>
	</footer>