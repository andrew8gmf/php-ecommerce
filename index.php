<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/public/index.php';
        break;
    case '' :
        require __DIR__ . '/public/index.php';
        break;
    case '/register' :
        require __DIR__ . '/public/register.php';
        break;
    case '/home' :
        require __DIR__ . '/public/home.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/public/404.php';
        break;
}
?>