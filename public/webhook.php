<?php
define('LOG_DIR', __DIR__.'/../logs');
define('CONNECTOR_DIR', __DIR__.'/../connector');

require __DIR__.'/../vendor/autoload.php';

Connector::run();
