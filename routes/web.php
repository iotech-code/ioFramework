<?php
/**
 * Web route.
 */

$route->any('/', 'controllers\Home@index');
$route->get('/product', 'controllers\Product@index');

?>