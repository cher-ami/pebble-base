<?php

// Configuration as globals
define('PEBBLE_WEB_ROOT', dirname(__FILE__).'/');
define('PEBBLE_APP_BASE', PEBBLE_WEB_ROOT . 'app/');

// Get composer auto-loader
require_once __DIR__ . '/app/vendor/autoload.php';

// Create new pebble app
$app = new pebble\core\PebbleApp();

// Run it
$app->run();