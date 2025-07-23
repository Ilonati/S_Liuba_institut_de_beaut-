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
                    <h1 class="page-title">Galleries</h1>
                    <div class="galery">
                        <div class="galery-img">
                            <a data-fslightbox="first-lightbox-1"
                                href="https://www.autourdesanimaux.com/wp-content/uploads/Top-8-choses-que-les-chats-ne-supportent-pas-1280x700.jpeg">
                                <img src="https://www.autourdesanimaux.com/wp-content/uploads/Top-8-choses-que-les-chats-ne-supportent-pas-600x360.jpeg?1"
                                    alt="">
                            </a>
                        </div>
                        <div class="galery-img">
                            <a data-fslightbox="first-lightbox-1" href="https://youtu.be/81rEczWtLho">
                                <img src="<?php echo IMG_DIR; ?>FondFleur2.jpg" alt="">
                            </a>
                        </div>
                        <div class="galery-img">
                            <img src="<?php echo IMG_DIR; ?>massage (1).jpg" alt="">
                        </div>
                        <div class="galery-img">
                            <img src="<?php echo IMG_DIR; ?>massage.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- <div class="slider-container">
                    <div class="slider">

                    </div>
                    <button class="prev-button" aria-label="">&lt;</button>
                    <button class="next-button" aria-label="">&gt;</button>
                </div> -->
            </main>
           <?php include('templates/footer.php'); ?>
        </div>
    </body>
</html>