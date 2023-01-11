<?php

require_once 'app/core/Router.php';
use App\Core\Router;

$request = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];
$url_prefix = str_replace('/index.php', '',$script_name);
$request = str_replace($url_prefix, '', $request);

$router = new Router($request);
$router->get('register', 'auth/register.php');
$router->get('login', 'auth/login.php');


$router->run();