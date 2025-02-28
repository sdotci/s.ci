<?php

declare(strict_types=1);

use S\Foundation\Http\Router;

require_once __DIR__.'/../bootstrap.php';

$router = new Router();

$router->on('GET /', fn() => '<p>Welcome to S!</p>');

$router->run(($_SERVER['REQUEST_METHOD'] ?? 'GET') . ' ' . ($_SERVER['REQUEST_URI'] ?? '/'));
