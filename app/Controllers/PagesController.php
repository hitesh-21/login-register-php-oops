<?php
namespace App\Controllers;

Class PagesController{
    public function about(){
        $data = ['sss','sssd'];
        require_once 'resources/views/about.php';
    }

    public function privacy(){
        echo "Welcome to Privacy PAge";
    }
}