<?php

declare(strict_types=1);

use S\Foundation\Application;
use S\Foundation\Context;

error_reporting(-1);

ini_set('display_errors', '1');

require __DIR__.'/../vendor/autoload.php';

return fn (Context $context) => new Application($context);
