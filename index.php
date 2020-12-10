<?php

require("system/core.php");

$Functions->summonPage("Accueil");

?>

<div class="container mt-5">

	<section class="">


		<h3 class="text-center font-weight-bold">Stan Is Slash, le blog avec les plus beaux slashs</h3>
		<h4 class="text-center font-weight-light mb-5">Les plus belles punchs à utiliser en société.</h4>


		<div class="row">

			<?php $result = $BDD->query("SELECT * FROM stanislash_blog");

			foreach ($result as $row) {
				$longueur_max = 100;
				$string = $row['content'];

				if (strlen($string) > $longueur_max) {
					$string = wordwrap($string, $longueur_max);
					$string = substr($string, 0, strpos($string, "\n"));
				}
				?>
				<div class="col-lg-4 col-md-12 mb-lg-0 mb-4 mt-4">
					<div class="card hoverable">

						<?php if ($row['image']) { ?>
							<img class="card-img-top" src="<?= $row['image'] ?>"> <!-- IMAGE PREVIEW -->
						<?php } ?>

						<div class="card-body">

							<h4><a href="article.php?q=<?= $row['id'] ?>"><?= $row['title'] ?></a></h4> <!-- TITRE DE LA CARD + LIEN DU POST -->

							<p class="card-title text-muted font-small mt-3 mb-2"><?= $string . '...' ?></p> <!-- DESCRIPTION COURTE -->

							<a type="button" class="btn btn-outline-primary mx-0" href="article.php?q=<?= $row['id'] ?>">Lire le slash<i class="fa fa-angle-right ml-2"></i></a> <!-- LIEN DU POST -->

						</div>
					</div>
				</div>
			<?php } ?>

			<!-- Ajouter ici les posts -->

		</div>

		<hr class="mb-5 mt-4">
	</section>

</div>


<?php include "includes/footer.php"; ?>