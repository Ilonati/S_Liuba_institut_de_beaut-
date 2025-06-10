<?php

// Variable a modifier pour passage en prod
// define ("ENV", "local");
define ("ENV", "prod");

if (ENV === "local") {
    define ('CSS_DIR', 'http://sliuba.local/dist/css/');
    define ('JS_DIR', 'http://sliuba.local/dist/js/');
    define ('IMG_DIR', 'http://sliuba.local/images/');
    define ('BASE_DIR', 'http://sliuba.local/');
} else {
    define ('CSS_DIR', 'https://ilona.afecdax.ovh/dist/css/');
    define ('JS_DIR', 'https://ilona.afecdax.ovh/dist/js/');
    define ('IMG_DIR', 'https://ilona.afecdax.ovh/images/');
    define ('BASE_DIR', 'https://ilona.afecdax.ovh/');
}