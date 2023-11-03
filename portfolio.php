<!DOCTYPE html>
<html>
	<?php 
		require "helpful-html/head.html";
	?>

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
			<h1>Portfolio</h1>

			<h3>i've done stuff</h3>
		</section>

		<div class="cardsdiv">
			<div class="card">
				<a href="assets/my-bike-sold/index.html">
					<img src="assets/images/my-bike-sold.png" alt="my bike sold site">
					<h3 style="padding-top: 0.3em;">My&nbsp;Bike Sold</h3>
				</a>
			</div>
		</div>

		<?php
			include "helpful-html/footer.php";
		?>

	</body>
</html>