<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

//$_SESSION = array();

// Destroy the session
//session_destroy();

switch ($request) {
    case '':
    case '/':
        $redirect = '/views/index.php';
        break;
    case '/login':
        $redirect = '/views/login.php';
        break;
    case '/login/logme':
        $redirect = '/views/login/logme.php';
        break;
    case '/pong':
        $redirect = '/views/pong.php';
        break;
    case '/adofai':
        $redirect = '/views/adofai.php';
        break;
    case '/api':
        $redirect = '/views/api.php';
        break;
        case '/logout':
                $_SESSION = array();
                 $redirect = '/views/index.php';
                break;
        case '/register':
                $redirect = '/views/register.php';
                break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        exit();
}

$_SESSION['site'] = $redirect;
require_once __DIR__ . '/views/core/header.php';
require_once __DIR__ . $redirect ?? __DIR__ . '/views/index.php';
require_once __DIR__ . '/views/core/footer.php';