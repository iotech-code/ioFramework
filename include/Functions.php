<?php
use Dwoo\Core;

function getconst($n) {
    global $const;
    return $const[$n];
}

function render($view, $params = []) {
    $template = new Core();
    return $template->get(getconst('template_dir') . $view, $params);
}

function req($req) {
    if(app('request')->method == 'POST'){
        return app('request')->body[$req];
    } else {
        return app('request')->query[$req];
    }
}

function this() {
    return app('request');
}