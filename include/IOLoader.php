<?php
/**
 * iO Framework Loader
 * 
 */

require ('Constants.php');
require (BASE_PATH . 'vendor/autoload.php');
require ('Functions.php');
/**
 * Load environments.
 */
$dotenv = new Dotenv\Dotenv(BASE_PATH);
$dotenv->load();

/**
 * Load route controls.
 */
require ('RouteLoader.php');