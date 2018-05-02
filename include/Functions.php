<?php
use Dwoo\Core;

function getconst($n) {
    global $const;
    return $const[$n];
}

function render($view, $params) {
    $template = new Core();
    return $template->get(getconst('template_dir') . $view, $params);

}