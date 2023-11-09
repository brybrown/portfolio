<!DOCTYPE html>
<html lang="en">
	<?php 
		require "helpful-html/head.html";
	?>

	<body>
		<?php require "helpful-html/headerbar.html";?>

		<link rel="stylesheet" href="css/about.css">

		<main>

			<section class="hero">
				<h1>Bryson Brown</h1>

				<h3>i swear i know what i'm doing</h3>
			</section>

			<section class="about" id="aboutme">

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tincidunt neque sed lacus convallis ultrices. Sed dignissim, sapien eu fermentum sollicitudin, lorem arcu bibendum lacus, ut tempor justo nisl at eros. Duis ac felis est. Mauris convallis finibus efficitur. Donec in enim quis turpis ultrices volutpat.
				</p>

				<p>I'm a student at the Catalyst Center, in Davis County, Utah. I write clean, readable code and design beautiful, elegant websites.</p>

			</section>
		
			<div class="cardsdiv">
				<div class="card">
					<a href="portfolio.php">
						<img src="assets/images/prints.png" alt="paw prints">
						
						<h3>Portfolio</h3>
					</a>
				</div>
				
				<div class="card">
					<a href="skills.php">
						<img src="assets/images/frog.png" alt="paw prints">

						<h3>Skills</h3>
					</a>
				</div>
			</div>

		</main>

		<?php
			require "helpful-html/footer.php";
		?>

	</body>
</html>