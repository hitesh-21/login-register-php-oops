<?php

$request = $_SERVER['REQUEST_URI'];
$url_prefix = '/classes/login-register-php-oops';
$request = str_replace($url_prefix, '', $request);
echo "<pre>";
print_r($request);