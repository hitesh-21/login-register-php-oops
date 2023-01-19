<?php
require_once 'vendor/autoload.php';
use Chahal26\PhpSimpleRouter\Router;

/* Creating Route Instance */
$router = new Router();
$router->setNamespace('\App\Controllers');
/* Defining Routes */
$router->get('/', function (){
    echo "Welcome to Home Page";
});
$router->get('/about', 'PagesController@about');
$router->get('/privacy', 'PagesController@privacy');

/* Execute Routes */
require_once "resources/views/layouts/header.php";
$router->run();
require_once "resources/views/layouts/footer.php";