<?php
namespace libs;

class ApiHelper{
    private $auth = array();
    public function __construct() {
        $this->auth = [
            "user" => getenv('basic_auth_user'),
            "password" => getenv('basic_auth_password')
        ];
    }
    public static function json_res($_arr) {
        echo json_encode($_arr);
    }

    public function require_auth($auth = array()) {
        if($auth != null) {
            $this->auth = [
                "user" => $auth['user'],
                "password" => $auth['password']
            ];
        }
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        $has_supplied_credentials = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
        $is_not_authenticated = (
            !$has_supplied_credentials ||
            $_SERVER['PHP_AUTH_USER'] != $this->auth['user'] ||
            $_SERVER['PHP_AUTH_PW']   != $this->auth['password']
        );
        if ($is_not_authenticated) {
            header('HTTP/1.1 401 Authorization Required');
            header('WWW-Authenticate: Basic realm="Access denied"');
            exit;
        }
    }
}