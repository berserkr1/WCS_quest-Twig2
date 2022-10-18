<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'home':
            echo $twig->render('home.html.twig');
            break;
        case 'layout':
            echo $twig->render('layout.html.twig');
            break;
        default:
            echo $twig->render('home.html.twig');
    }
} else {
    echo $twig->render('home.html.twig');
}
