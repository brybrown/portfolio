<!DOCTYPE html>
<html lang="en">
	<?php 
		require "helpful-html/head.html";
	?>

	<body>
		<?php
			require "helpful-html/headerbar.html";
		?>

		<link rel="stylesheet" href="css/about.css">

		<main>

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

			<?php
				require "helpful-html/about.html";
			?>

		</main>
	</body>
</html>