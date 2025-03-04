<?php

declare(strict_types=1);

use S\Foundation\Application;
use S\Http\Context;

/** @var Application $app */
$app = (require_once __DIR__.'/../src/app.php')(Context::global());

$app->on('GET /{name}?', fn (string $name) => '<p>Hello '.($name ?: 'World').'!</p>');

$app->run();
