<?php

namespace App\Http;

class Router{
    public function dispatch(){
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $uri = str_replace('/ebanx/api', '', $uri);
        var_dump($uri);
        die;
        if ($method === 'POST' && $uri === '/reset') {
            (new ResetController())->handle();
        } elseif ($method === 'GET' && $uri === '/balance') {
            (new BalanceController())->handle();
        } elseif ($method === 'POST' && $uri === '/event') {
            (new EventController())->handle();
        } else {
            http_response_code(404);
            echo 'Not Found';
        }
    }
}