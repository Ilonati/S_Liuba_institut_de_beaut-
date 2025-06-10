<?php

// Petite fonction pour lire le fichier .env
function loadEnv($path)
{
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}

// On charge le .env
loadEnv(__DIR__ . '/../.env');

// On récupère l'environnement (local par défaut si non défini)
$env = getenv('APP_ENV') ?: 'local';


if ($env === "local") {
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