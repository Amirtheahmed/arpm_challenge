<?php
namespace src\Controller;

class PageController {
    public function loadView($uri) {
        $folder = trim($uri, '/');
        require '../src/View/view.php';
    }
}
