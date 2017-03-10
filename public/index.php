<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use App\Kernel\Http;

$route = uri();

$routes = require 'routes.php';

try {
    $http = new Http;
    $match = $routes[$route] ?? $routes['/'];

    $response = $http->handler($match);
} catch (Throwable $error) {
    $response = $http->fallback($error);
}

echo $response;
