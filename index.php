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
					<div class="apropos">
						<h1><span>S.Liuba</span> votre institut de beauté à Tarbes</h1>
						<p><img src="https://cdn-icons-png.flaticon.com/512/2982/2982154.png" alt="Птицы" title="Птицы"
								width="44" height="44">
							Installé au cœur de la charmante ville de Tarbes, l'Institut de beauté S.Liuba est le
							parfait
							havre
							de paix pour tous ceux qui cherchent à chouchouter leur corps et leur esprit. Cet espace
							chaleureux
							et convivial offre une échappée belle à ceux qui veulent s'offrir un moment de bien-être.
							Dirigé par
							un expert dévoué, l'institut propose une large gamme de prestations, chaque service destiné
							à
							sublimer la beauté naturelle de chacun. Vous pouvez profiter des soins du visage
							personnalisés, du
							maquillage permanent pour un regard toujours impeccable, ou encore de différents types de
							massages
							tels que le populaire massage californien pour une détente profonde.

							<img src="https://cdn-icons-png.flaticon.com/512/76/76550.png" alt="Птица на ветке"
								title="Птица на ветке" width="44" height="44">

						</p>


						<h2><img src="https://cdn-icons-png.flaticon.com/512/4212/4212766.png" alt="Голубь"
								title="Голубь" width="44" height="44">
							Les services proposés par l’institut</h2>
					</div>

					<div class="services">
						<div class="service">
							<img src="<?php echo IMG_DIR; ?>massage du dos (1).jpg" alt="image massage" title="massage" width="354"
								height="339">
							<a href="Massage.html" title="Massage" class="button-service">
								<div class="services-item">Massage</div>
							</a>
						</div>
						<div class="service">
							<img src="<?php echo IMG_DIR; ?>permanante maquiage.jpg" alt="image permanent" title="permanent"
								width="354" height="339">
							<a href="Permanent.html" title="Permanent" class="button-service">
								<div class="services-item">Permanent</div>
							</a>
						</div>
						<div class="service">
							<img src="<?php echo IMG_DIR; ?>tatouage du ciles.jpg" alt="image cils" title="cils" width="354"
								height="339">
							<a href="Cils.html" title="Cils" class="button-service">
								<div class="services-item">Cils</div>
							</a>
						</div>
					</div>
					<div class="avis">
						<h1>Les avis de nos clients</h1>
						<div class="elfsight-app-64907157-a4a7-482a-82ea-aee93a93d319" data-elfsight-app-lazy></div>
					</div>

				</div>
			</main>
			<?php include('templates/footer.php'); ?>
		</div>
	</body>

</html>