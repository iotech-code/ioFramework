<?php
/**
 * Define constants
 */
define('DS', DIRECTORY_SEPARATOR, true);
define('BASE_PATH', __DIR__ . DS . '..' . DS, TRUE);

/**
 * Show errors
 */
if( getenv('environment') == 'dev' ) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

/**
 * General constant.
 */
$const = [
    'api_prefix' => '/api',
    'template_dir' => BASE_PATH . 'templates/'
];
