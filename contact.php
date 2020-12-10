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

		<!--Section heading-->
		<h2 class="h1-responsive font-weight-bold text-center my-4">Contact </h2>

		<div class="row">

			<!--Grid column-->
			<div class="col-md-9 mb-md-0 mb-5">
				<form id="contact-form" name="contact-form" action="system/mail.php" method="POST">

					<!--Grid row-->
					<div class="row pb-2">

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="name" name="name" class="form-control">
								<label for="name" class="">Votre nom</label>
							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="email" name="email" class="form-control">
								<label for="email" class="">Votre email</label>
							</div>
						</div>
						<!--Grid column-->

					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row pb-2">
						<div class="col-md-12">
							<div class="md-form mb-0">
								<input type="text" id="subject" name="subject" class="form-control">
								<label for="subject" class="">Sujet</label>
							</div>
						</div>
					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row pb-2">

						<!--Grid column-->
						<div class="col-md-12">

							<div class="md-form">
								<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
								<label for="message">Votre message</label>
							</div>

						</div>
					</div>
					<!--Grid row-->

				</form>

				<div class="text-center text-md-left">
					<a class="btn btn-primary">Envoyer</a>
				</div>
				<div class="status"></div>
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-3 text-center">
				<ul class="list-unstyled mb-0">
					<li><i class="fas fa-phone mt-4 fa-2x"></i>
						<p>07 78 56 07 25</p>
					</li>

					<li><i class="fas fa-envelope mt-4 fa-2x"></i>
						<p>perso@stan1712.com</p>
					</li>
				</ul>
			</div>
			<!--Grid column-->

		</div>

		<hr class="mb-5 mt-4">
	</section>

</div>


<?php include "includes/footer.php"; ?>