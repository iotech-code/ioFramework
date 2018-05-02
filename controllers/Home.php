<?php
namespace controllers;


class Home {

    public function __construct() {
    }

    public function index() {
        echo render('home.tpl');
    }
}