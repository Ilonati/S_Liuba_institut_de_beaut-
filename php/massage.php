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
        <!-- Elfsight Google Reviews | Untitled Google Reviews -->
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
		<script src="<?php echo JS_DIR; ?>theme.js?<?=time();?>" defer></script>
        <script src="<?php echo JS_DIR; ?>fslightbox.js" defer></script>

    </head>

    <body>
        <div class="page">

        <?php include ('templates/header.php'); ?>

            <main class="main">
                <div class="container">
                    <div class="apropos">
                        <h1>Massage</h1>
                    </div>

                    <div class="massage">
                        <div class="massage_bloc">
                            <div class="massage_title">
                                Massage CALIFORNIEN
                                <img src="<?php echo IMG_DIR; ?>massage du dos (1).jpg">
                                <span class="caret"><svg class="caret-down" width="16" height="16" fill="currentColor"
                                        class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg></span>

                            </div>
                            <div class="massage_answer-bloc">
                                <div class="massage_answer">Originaire des Etats Unis, ce massage utilise de longs
                                    mouvements lents et fluides qui permettent une profonde relaxation physique et
                                    psychique.
                                    Pour une séance de la tête aux pieds, ce massage californien s’adapte à chaque
                                    personne.

                                    Le massage californien a un effet positif sur le système nerveux car il favorise la
                                    détente émotionnelle, la relaxation psychique. Il diminue le stress et l’anxiété en
                                    permettant un espace de sécurité et de lâcher-prise.
                                    Le massage californien permet un ancrage corporel : du sommet de la tête jusqu’au
                                    bout des pieds.

                                    Comme tous les massages, le massage californien améliore la circulation sanguine et
                                    lymphatique, ce qui optimise les fonctions éliminatoires de l’organisme.
                                    Le massage californien amène à la détente globale du corps : il agit sur les
                                    muscles, sur les tendons, sur les articulations.
                                    <p>Dureé 1h 15min Tarif 65 €</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="massage">
                        <div class="massage_bloc">
                            <div class="massage_title">
                                <img src="<?php echo IMG_DIR; ?>massage.jpg">
                                Massage du dos, des épaules, de la nuque
                                <span class="caret"><svg class="caret-down" width="16" height="16" fill="currentColor"
                                        class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg></span>



                            </div>
                            <div class="massage_answer-bloc">
                                <div class="massage_answer">Massage du dos, des épaules, de la nuque. Ce massage est
                                    idéal pour éliminer les raideurs et les contractures, dénouer les tensions et
                                    libérer l’énergie du haut du dos. La sensation de bien-être se prolonge des heures
                                    durant, bien au-delà du soin.
                                    <p>Dureé 40min Tarif 40 €</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </main>
           <?php include('templates/footer.php'); ?>
        </div>
    </body>
</html>