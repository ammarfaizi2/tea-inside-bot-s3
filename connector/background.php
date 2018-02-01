<?php

require __DIR__.'/../config/main.php';
require __DIR__.'/../vendor/autoload.php';

$app = new \Bot\Bot(urldecode($argv[1]));
$app->run();