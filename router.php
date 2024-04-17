<?php

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

function routerToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require_once $routes[$uri];
    } else {
        abort();

    }

}

routerToController($uri, $routes);
function abort($code = 404)
{
    http_response_code($code);
    require_once "views/{$code}.php";
    exit;

}