<!DOCTYPE html>
<html>
	<?php 
		require "helpful-html/head.html";
	?>

	<link rel="stylesheet" href="css/portfolio.css">

	<body>
		<?php
			require "helpful-html/headerbar.html";
		?>

		<style>
			.hero {
				background-image: url("../assets/images/stuff2.jpg"), linear-gradient(rgba(12, 12, 16, 0.5) 0%, rgba(12, 12, 16, 0.65) 93%, rgba(12, 12, 16, 1) 97%);
			}
		</style>

		<section class="hero">
			<div class="herotext">
				<h1>Portfolio</h1>

				<h3>i've done stuff</h3>
			</div>
		</section>

		<div class="cardsdiv">

			<a href="https://daviscatalystehr.com" target="_blank" class="card">
				<img src="assets/images/charting.png" alt="catalyst charting">
				<div class="cardtext">
					<h3>Catalyst Charting</h3>

					<p>A medical charting software build for the medical students at the Catalyst Center.</p>
				</div>
			</a>

			<a href="assets/my-bike-sold/index.html" class="card">
				<img src="assets/images/my-bike-sold2.png" alt="my bike sold site">
				<div class="cardtext">
					<h3>My Bike Sold</h3>

					<p>A CE credit demo website done for a fake motorcycle selling company.</p>
				</div>
			</a>

		</div>

		<?php
			require "helpful-html/footer.php";
		?>

	</body>
</html>