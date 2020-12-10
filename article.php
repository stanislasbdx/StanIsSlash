<?php

require("system/core.php");

$result = $BDD->query("SELECT * FROM stanislash_blog WHERE id=" . $_GET['q']);
$article = $result->fetch_assoc();

$Functions->summonPage($article['title']);

?>

<div class="container mt-5">
	<section class="mx-md-5 dark-grey-text">

		<div class="row">
			<div class="col-md-12">
				<div class="card card-cascade wider reverse">
					<?php if ($article['image']) { ?>
						<div class="view view-cascade overlay">
							<img class="card-img-top" src="<?= $article['image'] ?>" alt="Sample image">
						</div>
					<?php } ?>

					<div class="card-body card-body-cascade text-center">
						<h3 class="font-weight-bold"><a><?= $article['title'] ?></a></h3>

						<p>Ecrit par <a><strong><?= $article['author'] ?></strong></a>, <?= date("d/m/Y H:i", strtotime($article['created_at'])) ?></p>
					</div>
				</div>

				<div class="mt-5">
					<p class="lead">"<?= $article['title'] ?>"</p>

					<?= $article['content'] ?>

				</div>
			</div>

		</div>
		<hr class="mb-5 mt-4">
	</section>
</div>

<?php include "includes/footer.php"; ?>