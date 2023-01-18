<?php
require_once 'vendor/autoload.php';

use Chahal26\PhpSimpleRouter\Router;

/* Creating Route Instance */
$router = new Router();

/* Defining Routes */
$router->get('/', function() { 
    echo "Welcome to Home Page"; 
});


/* Execute Routes */
$router->run();