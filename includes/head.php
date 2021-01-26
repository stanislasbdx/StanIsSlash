<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">

	<title><?= $title ?> - Stani/</title>

	<link rel="shortcut icon" href="https://media.discordapp.net/attachments/610108081157963787/758399366356140042/Logo_new.jpg">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
	<!-- MDB -->
	<link rel="stylesheet" href="assets/css/mdb.min.css" />

	<?php
		if($_GET['q'] != null){ ?>
			<meta property="og:title" content="<?= $title ?>" />
			<meta property="og:description" content="Chiné sur StanIsSlash" />
			<meta property="og:url" content="<?= 'https://slash.stan1712.com?q=' . $_GET['q'] ?>" />
		<?php }
		else { ?>
			<meta property="og:title" content="StanIsSlash" />
			<meta property="og:description" content="Les plus belles punchs à utiliser en société." />
			<meta property="og:url" content="'https://slash.stan1712.com/'" />
		<?php }
		
		if($image){ ?>
			<meta property="og:image" content="<?= $image ?>" />
			<meta name="twitter:card" content="summary_large_image">
		<?php }
	?>

	<meta property="og:type" content="website" />
	<meta name="theme-color" content="#2866F1">
</head>

<body>

<nav class="navbar navbar-expand-lg primary-color px-4">
	<a class="navbar-brand bold" href="index.php">Stan Is Slash</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav px-4">
			<li class="nav-item active">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>
		</ul>
	</div>
</nav>