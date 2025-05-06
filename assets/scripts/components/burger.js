// JavaScript variables
let btnOpenMenu = document.getElementById('openMenu'); // Bouton pour ouvrir le menu
let btnCloseMenu = document.getElementById('closeMenu'); // Bouton pour fermer le menu
let SiteNav = document.getElementById('main-nav'); // Navigation principale du site
let overlay = document.querySelector('.overlay-menu-mobile'); // Overlay fond noir avec opacité

// Si le bouton existe
if (btnOpenMenu) {
    // Ajouter un écouteur d'événement (click ici)
    btnOpenMenu.addEventListener('click', function () {
        // Ajouter une class CSS
        SiteNav.classList.add('visible');

        // Si l'overlay existe dans le dom, on le rend visible (ajouter la calsse open)
        if (overlay) {
            overlay.classList.add('open');
        }
    });
}

// Si le bouton existe
if (btnCloseMenu) {
    btnCloseMenu.addEventListener('click', function () {
        // Ajouter une class CSS
        SiteNav.classList.remove('visible');

        // Si l'overlay existe dans le dom, on le cache (retirer la calsse open)
        if (overlay) {
            overlay.classList.remove('open');
        }
    });
}