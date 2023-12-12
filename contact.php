<!DOCTYPE html>
<html>
	<?php 
		require "helpful-html/head.html";
	?>

	<link rel="stylesheet" href="css/contact.css">

	<body>
		<?php
			require "helpful-html/headerbar.html";
		?>

		<style>
			.con {
				background-color: hsl(186, 68%, 45%);
			}
		</style>

		<section class="hero">
			<div class="herotext">
				<h1>Get In Touch</h1>

				<h3>i don't bite much</h3>
			</div>
		</section>

		<div class="cardsdiv">
	
			<div class="card">
				<img src="assets/images/email.jpg" alt="frog">

				<div class="cardtext">
					<h3>Email</h3>

					<p><a href="mailto:26bbrown5@go.dsdmail.net">26bbrown5<br>@go.dsdmail.net</a></p>
				</div>
			</div>

			<div class="card">
				<img src="assets/images/pigeon.jpg" alt="pigeon">

				<div class="cardtext">
					<h3>Carrier Pigeon</h3>

					<p>67.568165 N, 134.472201 E</p>
				</div>
			</div>

		</div>

		<?php
			require "helpful-html/footer.php";
		?>
	</body>
</html>