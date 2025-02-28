<?php

declare(strict_types=1);

use S\Foundation\Http\Server;

require_once __DIR__.'/../bootstrap.php';

$server = new Server($_SERVER);

$server->on('GET /', fn () => '<p>Welcome to S!</p>');

$server->run();
