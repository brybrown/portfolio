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
			#portfolio a {
				background-color: hsl(131, 22%, 50%);
				border-radius: 0.4em;
			}

			#portfolio:hover a {
				background-color: hsla(131, 22%, 40%, 0.7);
			}
		</style>

		<div class="cardsdiv">
			<div class="card">
				<a href="assets/my-bike-sold/index.html">
					<img src="assets/images/my-bike-sold.png" alt="my bike sold site">
					<!-- TODO: snip new image that is wider -->
					<h3>My&nbsp;Bike&nbsp;Sold</h3>
				</a>
			</div>
		</div>
	</body>
</html>