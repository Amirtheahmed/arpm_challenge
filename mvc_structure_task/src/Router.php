<?php
namespace src;

class Router {
    private $controller;

    public function __construct($controller) {
        $this->controller = $controller;
    }

    public function route($uri) {
        switch ($uri) {
            case '/':
            case '/folder1/':
            case '/folder2/':
            case '/folder1':
            case '/folder2':
                $this->controller->loadView($uri);
                break;
            default:
                http_response_code(404);
                echo 'Oops, Page Not Found';
                break;
        }
    }
}
