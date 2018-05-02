<?php
/**
 * Web route.
 */

 $route->any('/', 'controllers\Home@index');
 $route->any('/test', function() {
    echo 'Hello World '. req('test');
    echo this()->ip();
});

?>