<?php
namespace controllers;


class Home {

    public function __construct() {
    }

    public function index() {
        $data = [
            'content'    => 'Welcome'
        ];
        echo render('home.tpl', $data);
    }
}