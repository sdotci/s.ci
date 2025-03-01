<?php

declare(strict_types=1);

use S\Foundation\Http\Application;
use S\Foundation\Http\Context;

require_once __DIR__.'/../bootstrap.php';

$app = new Application(Context::global());

$app->on('GET /', fn () => '<p>Welcome to S!</p>');

$app->run();
