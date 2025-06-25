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

            <div class="main-content">

                <div class="main-box">
                    <div class="title">
                        <h1>Je suis toujours ravis de vous accueillir !</h1>
                    </div>
                    <div class="article">
                        <p>
                            Si vous avez des questions, des souhaits ou si vous souhaitez prendre rendez-vous pour un
                            soin, n’hésitez pas à me contacter par le moyen qui vous convient le mieux. Je
                            serai ravis de vous aider à choisir la prestation idéale, de vous informer sur
                            mes offres en cours et de répondre à toutes vos questions.
                        </p>
                    </div>
                    <div class="article">
                        <p>La beauté commence par l’attention, et je suis là pour rendre votre visite agréable et
                            inoubliable.</p>
                    </div>

                    <form class="form-contact">
                        <div class="form-group">
                            <label for="nometprenom">Votre nom et prénom :</label>
                            <input class="form-control" type="nometprenom" id="nometprenom" maxlength="50"
                                name="nometprenom" required>
                        </div>
                        <div class="form-group">
                            <label for="nometprenom">Votre nom et prénom :</label>
                            <input class="form-control" type="nometprenom" id="nometprenom" maxlength="50"
                                name="nometprenom" required>
                        </div>

                        <div class="form-group">
                            <label for="numero">Votre numéro de téléphone :</label>
                            <input class="form-control" type="numero" id="numero" maxlength="20" name="numero" required>
                        </div>

                        <div class="form-group">
                            <label for="mail">Votre adresse e-mail :</label>
                            <input class="form-control" type="mail" id="mail" maxlength="50" name="mail" required>
                        </div>

                        <div class="form-group">
                            <label for="mail">Sujet :</label>

                            <select class="form-control">
                                <option>Choisissez...</option>
                                <option>Servis Massage</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Votre message :</label>
                            <textarea class="form-control" name="message" id="message" rows="10" cols="50"></textarea>
                        </div>

                        <div class="form-group checkbox">
                            <label for="politiquedeconfidentialite">
                                <input type="checkbox" id="politiquedeconfidentialite">
                                <span>En validant ce formulaire, je reconnais avoir
                                    pris
                                    connaissance de la <a href="#" title="Politique de confidentialité">Politique de
                                        confidentialité</a>
                                    et
                                    des
                                    droits dont je dispose sur mes données personnelles.
                                </span>
                            </label>
                        </div>
                        <div class="form-group">
                            <button class="button-service-m">Envoyer mon message</button>
                        </div>
                    </form>

                </div>



            </div>
           <?php include('templates/footer.php'); ?>
        </div>
    </body>
</html>