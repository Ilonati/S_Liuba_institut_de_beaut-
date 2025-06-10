<?php include("config/settings.php"); ?>
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<title></title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link id="main-css" rel="stylesheet" href="<?php echo CSS_DIR; ?>theme.css?<?=time();?>" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap"
			rel="stylesheet">

		<!-- Elfsight Website Translator | Untitled Website Translator -->
		<script src="https://static.elfsight.com/platform/platform.js" async></script>

		<script src="<?php echo JS_DIR; ?>theme.js?<?=time();?>" defer></script>
		<script src="<?php echo JS_DIR; ?>fslightbox.js" defer></script>

	</head>

	<body>
		<div class="overlay-menu-mobile"></div>
		<div class="page">

			<?php include ('templates/header.php'); ?>

			<main class="main">
				<div class="container">
					<h1>Permanent</h1>
				</div>
			</main>
			<?php include('templates/footer.php'); ?>
		</div>
	</body>

</html>