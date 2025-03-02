<?php

declare(strict_types=1);

use S\Http\Application;
use S\Http\Context;

require_once __DIR__.'/../bootstrap.php';

$app = new Application(Context::global());

$app->on('GET /{name}', fn (Context $context) => '<p>Hello '.$context->getAttribute('name', 'World').'!</p>');

$app->run();
