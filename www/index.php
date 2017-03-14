<?php

// Configuration as globals
define('PEBBLE_APP_BASE', 'app/');

// Get composer auto-loader
require_once __DIR__ . '/app/vendor/autoload.php';

// Create new pebble app
$app = new pebble\core\PebbleApp();

// Run it
$app->run();