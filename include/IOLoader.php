<?php
/**
 * iO Framework Loader
 * 
 */

require ('Constants.php');
require (BASE_PATH . 'vendor/autoload.php');
require ('Functions.php');
require ('Database.php');

/**
 * Error handle
 */
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

/**
 * Load environments.
 */
$dotenv = new Dotenv\Dotenv(BASE_PATH);
$dotenv->load();

/**
 * Load route controls.
 */
require ('RouteLoader.php');

