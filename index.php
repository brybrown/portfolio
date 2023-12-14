<!DOCTYPE html>
<html lang="en">
	<?php 
		require "helpful-html/head.html";
	?>

	<body>
		<?php require "helpful-html/headerbar.html";?>

		<link rel="stylesheet" href="css/about.css">

		<style>
			.home {
				background-color: hsl(186, 68%, 45%);
			}
		</style>

		<main>

			<section class="hero">
				<div class="herotext">
					<h1>Bryson Brown</h1>

					<h3>i swear i know what i'm doing</h3>
				</div>
			</section>

			<section class="about" id="aboutme">

				<p>I'm a student at the Catalyst Center, in Davis County, Utah. I write clean, readable code and design beautiful, elegant websites. My hobbies include skiing and developing games in Unity.</p>

				<p>I am fluent in HTML, CSS, Javascript (including NodeJS), PHP, C#, and the enigma of flexbox.</p>

			</section>
		
			<div class="cardsdiv">
				<div class="card">
					<a href="portfolio.php">
						<img src="assets/images/code.jpg" alt="code">
						
						<h3>Portfolio</h3>
					</a>
				</div>
				
				<div class="card">
					<a href="contact.php">
						<img src="assets/images/phone.jpg" alt="phone">

						<h3>Contact</h3>
					</a>
				</div>
			</div>

		</main>

		<?php
			require "helpful-html/footer.php";
		?>

	</body>
</html>