<?php

require("system/core.php");

$Functions->summonPage("Contact");

?>

<div class="container mt-5">
	<?php
	if (isset($_GET['r']) && $_GET['r']) {

		if ($_GET['r'] == 1) { ?>
			<div class="alert alert-success" role="alert">
				L'email a été envoyé ! 👌
			</div>
		<?php } else if ($_GET['r'] == 0) { ?>
			<div class="alert alert-danger" role="alert">
				Une erreur est survenue :c
			</div>
		<?php } ?>
	<?php } ?>

	<section class="mb-4">
		<h2 class="h1-responsive font-weight-bold text-center my-4">Contact </h2>

		<div class="row pb-4">

			<div class="col-md-9 mb-md-0 mb-5">
				<form id="contact-form" name="contact-form" action="system/mail.php" method="POST">

					<div class="row pb-2">
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="input" id="name" name="name" class="form-control" required>
								<label for="name" class="">Votre nom</label>
							</div>
						</div>

						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="email" id="email" name="email" class="form-control" required>
								<label for="email" class="">Votre email</label>
							</div>
						</div>
					</div>

					<div class="row pb-2">
						<div class="col-md-12">
							<div class="md-form mb-0">
								<input type="input" id="subject" name="subject" class="form-control" required>
								<label for="subject" class="">Sujet</label>
							</div>
						</div>
					</div>

					<div class="row pb-2">
						<div class="col-md-12">
							<div class="md-form">
								<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
								<label for="message">Votre message</label>
							</div>
						</div>
					</div>

					<div class="text-center text-md-left">
						<button class="btn btn-primary" type="submit">Envoyer</button>
					</div>

				</form>
			</div>

			<div class="col-md-3 text-center">
				<ul class="list-unstyled mb-0">
					<li><i class="fas fa-envelope mt-4 fa-2x"></i>
						<p>perso@stan1712.com</p>
					</li>
				</ul>
			</div>

		</div>

		</div>

		<hr class="mb-5 mt-4">
	</section>

</div>


<?php include "includes/footer.php"; ?>